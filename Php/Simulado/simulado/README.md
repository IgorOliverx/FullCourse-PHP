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
