
<style>
    body{
        margin: 0;
    }
    header{
        box-shadow: 0px 0px 20px rgba(0,0,0,0.1);
        background: #fff;
        position: fixed;
        width: 100%;
        top: 0;
    }

    header, nav {
        display: flex;
        justify-content: space-between;
        padding: 1rem;

    }
    .lista .lista-1{
        text-decoration: none;
        color: black;
        margin-right: 1rem;
    }
    .container-principal{
        margin-top: 150px;
    }


</style>

<header >
    <h1>Home</h1>
    <nav>
        <ul class="lista">
            <a href="/login" class="lista-1">Login</a>
            <a href="/register" class="lista-1">Cadastro</a>
            <a href="/teste" class="lista-1">Perfil</a>
            <a href="/" class="lista-1">Logout</a>

        </ul>
    </nav>
</header>
