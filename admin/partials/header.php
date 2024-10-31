<header>
        <div class="container__menu">
            <div class="logo">
                <img src="img/logo.png" alt="ASOGCABE" title="logo">
                <p>ASOGCABE</p>
            </div>
            <div class="menu">
                <svg id="btn_menu" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M4 6l16 0" />
                    <path d="M4 12l16 0" />
                    <path d="M4 18l16 0" />
                </svg>
                <div id="back_menu"></div>
                <nav id="nav">
                    <img src="img/logo.png" alt="">
                    <ul>
                        <li><a href="inicio.php">Inicio</a></li>
                        <li><a href="rutas.php">Rutas</a></li>
                        <li><a href="galeria.php">Galeria</a></li>
                        <li><a href="quienes-somos.php">Quienes somos</a></li>
                        <li><a href="asociados.php">Asociados</a></li>
                        <li><a href="contactos.php">contactos</a></li>
                    </ul>
                </nav>
            </div>
        </div>
</header>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Josefin Sans", sans-serif;
}

body{
    background-color: #faf6f0;
}

header{
    width: 100%;
    height: 80px;
    z-index: 1;
    background-color: #000;
}

.container__menu{
    max-width: 1200px;
    height: 100%;
    margin: auto;
    display: flex;
    justify-content: space-between;
    padding-left: 20px;
    padding-right: 20px;
}

.logo{
    height: 100%;
    display: flex;
    align-items: center;
}
.logo img{
    width: 60px;
    border-radius: 50%;
}

.logo p{
    color: #fff;
    font-size: 30px;
    margin-left: 10px;
}

.menu{
    display: flex;
    align-items: center;
}
.menu ul{
    display: flex;
}

.menu ul li{
    list-style: none;
    margin-left: 36px;
}

.menu ul li a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
    text-transform: uppercase;
    transition: 0.5s;
}
.menu ul li a:hover{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
    text-transform: uppercase;
    font-weight: 900;
    transition: 0.5s;
}

.menu nav img{
    display: none;
}

.menu #btn_menu{
    display: none;
}


@media screen and (max-width: 1000px){
    
    header{
        padding: 40px;
    }

    .menu nav{
        position: fixed;
        top: 0;
        right: -250px;
        background: rgb(5, 5, 5);
        width: 250px;
        height: 100vh;
        padding: 40px;
        z-index: 1;
        transition: all 300ms;
    }
    .menu ul{
        flex-direction: column;
        margin-top: 40px;
    }
    .menu ul li{
        margin-top: 30px;
        margin-left: 0;
    }
    .menu ul li a{
        color: #dedede;
    }
    .menu nav img{
        display: block;
        width: 100px;
        border-radius: 50%;
    }
    #back_menu{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: rgba(0, 0, 0, 0.5);
        display: none;
    }
    .menu #btn_menu{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        background: #092138;
        border-radius: 10px;
    }

}

</style>