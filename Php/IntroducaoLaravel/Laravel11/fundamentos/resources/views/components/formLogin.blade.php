<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
    *{
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        /*aqui tem um background de img mas nao estou conseguindo colocar F*/
        background-color: purple;
        background-size: cover;
        background-position: center;

    }

    .wrapper{
        width: 420px;
        background: transparent;
        border: 2px solid rgba(255,255,255, .2);
        color:#fff;
        padding: 30px 40px;
        border-radius: 10px;
    }

    .wrapper h1{
        font-size: 36px;
        text-align: center;
    }
    .wrapper .input-box{
        position: relative;
        width: 100%;
        height: 50px;
        margin: 30px 0;
    }
    .input-box input{
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        border: 2px solid rgba(255,255,255, .2);
        border-radius: 40px;
        font-size: 16px;
        color: #fff;
        padding: 20px 45px 20px 20px;
    }

    .input-box input::placeholder{
        color: #fff;
    }

    .input-box i {
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
    }

    .wrapper .remember-forget{
        display: flex;
        justify-content: space-between;
        font-size: 14.5px;
        margin: -15px 0 15px;
    }

    .remember-forget label input{
        accent-color: #fff;
        text-decoration: none;
    }
    .remember-forget a{
        text-decoration: none;
        color: #fff;
    }
    .remember-forget a:hover{
        text-decoration: underline;
    }

    .wrapper .btn{
        width: 100%;
        height: 45px;
        background: #fff;
        border: none;
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0,0,0, .1);
        cursor: pointer;
        font-size: 16px;
        color: #333;
        font-weight: 600;
    }

    .wrapper .register-link{
        font-size: 14.5px;
        text-align: center;
        margin: 20px 0 15px;
    }

    .register-link p a {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
    }
    .register-link p a:hover{
        text-decoration: underline;
    }
</style>

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<div class="wrapper">
    <form action="{{route('login')}}" method="post">
        <h1>login</h1>
        <div class="input-box">
            @csrf
            <input type="email" name="email" id="email" required placeholder="E-mail">
            <i class='bx bxs-envelope' ></i>
        </div>
        <div class="input-box">
            <input type="password" name="password" id="password" required placeholder="Senha">
            <i class='bx bxs-lock-alt' ></i>
        </div>

        <div class="remember-forget">
            <label><input type="checkbox" name="" id="">Lembrar</label>
            <a href="#">Esqueceu a senha?</a>
        </div>

        <button type="submit" class="btn">Login</button>

        <div class="register-link">
            <p>Não tem cadastro? <a href="/register">Faça seu cadastro</a></p>
        </div>
    </form>
</div>
