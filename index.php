<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portfolio Thales Carvalho</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#home" class="nav__logo">Thales</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Inicio</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">Sobre</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Trabalho</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contato</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Oi,<br> sou <span class="home__title-color">Thales</span><br> Web Designer</h1>

                    <a href="#contact" class="button">Contatos</a>
                </div>

                <div class="home__social">
                    <a href="https://www.linkedin.com/in/thalescarvalho23/" target="_blank" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://api.whatsapp.com/send?phone=5511985933820&text=me%20chame%20para%20conversar." target="_blank" class="home__social-icon"><i class='bx bxl-whatsapp' ></i></a>
                    <a href="https://github.com/thalescarvalho23" target="_blank" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">Sobre</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/sobre.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle"> Thales Carvalho</h2>
                        <p class="about__text">(Nacido em São Paulo, 01 de Maio de 1997), Auxiliar administrativo e contabil (free lencer) estudante De Análise e Desenvolvimento de Sistemas, Ex-recpcionista de flat, atualmente procura uma oportunidade de ser Desenvolvedor De Sofware..</p>           
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Habilidades Profissionais</h2>
                        <p class="skills__text">Em Front End tenho experiência com (Html, css, JavaScript, Php, Boodstrap e photoshop) em Back End tenho  experiência com ( MySql, C++, C# e Java) .</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">95%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-paint skills__icon'></i>
                                <span class="skills__name">UX/UI</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>              
                        <img src="assets/img/work3.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section>

            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Trabalhos</h2>

                <div class="work__container bd-grid">
                    <div class="work__img">
                        <img src="assets/img/work1.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work2.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work3.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work4.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work5.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work6.jpg" alt="">
                    </div>
                </div>
            </section>
          

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contato</h2>

                <div class="contact__container bd-grid">
                    <form action="insert.php" method="post" class="contact__form">
                        <input type="text" name="nome" placeholder="Nome" class="contact__input">
                        <input type="mail" placeholder="Email" class="contact__input" name="email">
                        <textarea name="informacao" id="" cols="0" rows="10" class="contact__input"></textarea>
                        <input type="submit" value="Enviar" class="contact__button button">
                    </form>
              
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Thales Carvalho</p>
            <div class="footer__social">
            </div>
            <p>&#169; 2021 copyright all right reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>

    </body>
</html>