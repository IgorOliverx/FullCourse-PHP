## Como preencher o banco de dados com arquivos JSON(Sem usar migration)

 -      TUTORIAL

 - Julgando que a tabela ja esteja criada, vamos partir para dentro do laravel;
 - Crie um Model e um Controller da entidade que você deseja preencher (padrão de nomenclatura);
 - Crie um seeder da entidade - php artisan make:seeder _nome_Seeder

    
        $filePath = public_path('Midias/arquivo.json');
        $dados = json_decode(file_get_contents($filePath), true);
    foreach ($dados as $item) {
            DB::table('nometabela')->insert($item);
        }

 - Execute o comando 'php artisan db:seed --clas=_nome_Seeder'


 -      Em caso de chaves estrangeiras - ATENTE-SE A ORDEM

 - Faça todos os passos anteriores para todas as tabelas dentro da sua base de dados;
 - Use a Classe DatabaseSeeder e chame todas as classe dessa forma:

   $this->call(RamMemoryTypeSeeder::class);
   $this->call(SocketTypeSeeder::class);
   $this->call(BrandSeeder::class);
   $this->call(MotherboardSeeder::class);
 
 - Execute o comando 'php artisan db:seed'

## Como retornar na view um objeto json

 - Crie um controllador e um modelo para a entidade que você queira ter o retorno de objeto JSON
 - Usando padroes da psr-4 crie a function index:

          public function index( )
          {
          $nomeVariavel = _CLASSE DO MODELO QUE VC QUER_::all();

        return response()->json(['_NOMETABELA_' => $nomeVariavel]);
          }
 - Agora, na view vc pode fazer o seguinte:

        <pre>{{ json_encode($nomeVariavel, JSON_PRETTY_PRINT) }}</pre>
LEMBRE-SE:

 - VOCÊ QUANDO NAO USA MIGRATIONS DO LARAVEL PRECISA ESPECIFICAR O NOME DA TABELA DENTRO DO MODEL DA ENTIDADE:
 
          protected $table = 'nome_da_tabela';

## Como fazer um sistema de login no laravel

 - Supondo que você vá receber os dados via json e só vai inseri-lós no banco de dados manualmente
você pode fazer as seguintes etapas.
 - 1° - Incluir a classe SessionStart dentro do array middleware na classe Kernel.php
 - 2° - Fazer a model/view/controller de login

## MODEL:
            <?php

    namespace App\Models;
    
    // use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Laravel\Sanctum\HasApiTokens;
    
    class User extends Authenticatable
    {
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'user'; //nome da minha tabela no banco de dados

    //esses sao as colunas que quero acessar
    protected $fillable = [
        'username',
        'password',
        'accessToken'
    ];

    }

## VIEW:

    <form action="{{ route('login') }}" method="post">
        @csrf //csrf é necessario!
        <label for="">Username:</label>
        <input type="text" name="username" id="">
        <br>
        <label for="">Password:</label>
        <input type="password" name="password" id="">
    
        <input type="submit" value="enviar">
    </form>

## CONTROLLER:
       <?php
    
    namespace App\Http\Controllers;
    
    use App\Models\User;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    
    class AuthController extends Controller
    {
    
        //esse metodo é necessário para a requisição via GET
        public function mostrarLogin()
        {
            //so retorna a view quando o user acessa o endpoint
            return view('login');
        }
    
        //metodo principal de login
        public function login(Request $request)//Recebe uma requisição no construtor (POST)
        {
            $request->session()->reflash();// é utilizada em conjunto com o return back
    
            $credenciais = $request->only('username', 'password');
    
            $request->merge([
                'username' => $credenciais['username'],
                'password' => $credenciais['password'],
            ]);
    
            $passaAcesso = User::query()->get('accessToken');//passando acesso da consulta ao bd
            $teste = Auth::user()->accessToken;//isso aqui faz com que pegue os dados somente do usuario em questão
    
            if (Auth::attempt($credenciais)) {
                return redirect()->intended("/?$teste");
            }
    
            return back()->withErrors("Credenciais inválidas");
        }
    
    
    }
    


## CRIPTOGRAFAR SENHAS QUE JÁ ESTÃO NO BANCO DE DADOS:
 - O laravel por padrão, só aceita senhas criptografas no padrão PASSWORD_BCRYPT
   - Como eu já tinha as senhas no banco de dados, precisei de um script que
Estabele uma conexão, acessa o banco de dados, captura as colunas, faz o hash das senhas e insere novamente no banco de dados:
         
            <?php
        
          // Conexão com o banco de dados
          $pdo = new PDO('mysql:host=127.0.0.1; dbname=alatechmachines', 'root', '');
        
          //instrução sql para buscar todos os usuários com suas senhas
          $stmt = $pdo->query("SELECT id, password FROM user");
        
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              //agora pego as senhas em forma de array e criptografo no padrao bcrypt
              $bcryptPassword = password_hash($row['password'], PASSWORD_BCRYPT);
        
              //instrução sql para atualizar a senha criptografada no banco de dados
              $updateStmt = $pdo->prepare("UPDATE user SET password = :password WHERE id = :id");
              $updateStmt->execute([
                  'password' => $bcryptPassword,
                  'id' => $row['id'],
              ]);
          }
        
          echo "Funciona por favor";

## COMO FAZER PARA SOMENTE UM USER LOGADO ACESSE DETERMINADOS ENDPOINTS:
 - Dentro do middleware Authenticate.php você tem dois métodos e pode alterá-los como preferir.
               
        <?php
        
          namespace App\Http\Middleware;
        
          use Illuminate\Auth\Middleware\Authenticate as Middleware;
          use Illuminate\Http\Request;
          use Illuminate\Support\Facades\Auth;
        
          class Authenticate extends Middleware
          {
          //metodo de redirecionamento caso a autenticação ja tenha acontecido
          protected function redirectTo(Request $request): ?string
          {
          //retorna nulo se for uma api(JSON connection in the front end) ou retorna para a pagina de login
          return $request->expectsJson() ? null : route('login');
          }
    
          //metodo principal da classe()-> caso toda a autenticação funcione ou nao funcione
          public function handle($request, Closure|\Closure $next, ...$guards)//cabeçalho recebe a requisição e algumas paradas
          {
             if(!Auth::check()){//se o usuario nao estiver autenticado
                 return redirect('/login');//redireciona para a alguma view que eu quiser
             }

          return $next($request);//caso ele esteja, prossegue com a requisição (nesse simulado estou tratando acesso a endpoints)
          }
        
          }

   - Agora você precisa adicionar essa classe dentro do middleware no Kernel
   
            protected $middlewareGroups = [
                'web' => [
            EncryptCookies::class,
         AddQueuedCookiesToResponse::class,
          StartSession::class,
           ShareErrorsFromSession::class,
             VerifyCsrfToken::class,
              SubstituteBindings::class,
                ],
                                
         'api' => [
           // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
              \Illuminate\Routing\Middleware\ThrottleRequests::class.':api',
             SubstituteBindings::class,
              StartSession::class,
           ],

         'routes' =>[
         'auth' => Authenticate::class,
          ],
          ];
           protected $routeMiddleware = [
              'auth' => Authenticate::class,
              ];

     - Agora o roteamento deve ser assim:
         
            Route::middleware('auth')->group(function(){
            Route::get('/machines', [MachineController::class, 'card']);
            });

