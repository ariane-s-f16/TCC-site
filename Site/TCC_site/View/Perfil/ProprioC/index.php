<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Perfil</title>
</head>

<body>
    <header>
        <div class="nav-container">
            <div class="left-nav-container">
                <div class="lg-div"><img src="/img/logo.png" alt="Logo OPI"></div>

                <div class="buscador-div">
                    <input class="buscador" id="buscador">
                    <label class="bs-label">Busque por trabalhadores e empresas</label>
                    <label for="buscador" class="bs-svg">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                            heigth="px" width="20px" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M456.69 421.39 362.6 327.3a173.81 173.81 0 0 0 34.84-104.58C397.44 126.38 319.06 48 222.72 48S48 126.38 48 222.72s78.38 174.72 174.72 174.72A173.81 173.81 0 0 0 327.3 362.6l94.09 94.09a25 25 0 0 0 35.3-35.3zM97.92 222.72a124.8 124.8 0 1 1 124.8 124.8 124.95 124.95 0 0 1-124.8-124.8z">
                            </path>
                        </svg>
                    </label>
                </div>
            </div>

            <nav class="right-nav-container">
                <ul class="nav-links">
                    <li><a href="/" class="nav-link">Home</a></li>
                    <li><a href="/trabalhadores" class="nav-link">Trabalhadores</a></li>
                    <li><a href="/empresas" class="nav-link">Empresas</a></li>
                    <li><a href="/sobre" class="nav-link">Sobre</a></li>
                </ul>

                <button class="perfil-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="perfil-name">Diego</span>
                </button>

                <button class="favoritos-btn" aria-label="Favoritos">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                        </path>
                    </svg>
                </button>
            </nav>
        </div>
    </header>

    <main class="perfil_profisional-main">
        <section class="img_fundo-card-perfil">
            <div class="img-fundo"></div>

            <div class="card-perfil">
                <div class="top-content-card">
                    <div class="TCC-left">
                        <div class="foto-perfil"></div>

                        <div class="informacoes-card_perfil">
                            <h2 class="nome-perfil">Diego S. F.</h2>
                            <p class="profissao">Desenvolvedor Front-End</p>
                            <div class="mini-informacoes">
                                <div class="localizacao-TCC">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="#6d6c7f" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-map-pin w-4 h-4">
                                        <path
                                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                        </path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    <p class="lc-cidade_estado"><span class="lc-cidade">Jaú</span>, <span
                                            class="lc-estado">SP</span></span></p>
                                </div>

                                <div class="avaliacao-TCC">
                                    <div class="star">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="star pri">
                                            <path
                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                            </path>
                                        </svg>
                                    </div>

                                    <span class="quant-stars">4.0</span>
                                    <p>(<span class="quant-avaliacoes">123</span> <span
                                            class="quant_avaliacoes-text">avaliações</span>)</p>
                                </div>

                                <div class="disponibilidade">
                                    <span class="disponi-text">Disponível</span>
                                </div>

                                <div class="empre_profi">
                                    <span class="empre_profi-text">Profissional</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="TCC-right">
                        <button class="btn-editar-perfil">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg>
                            Editar Perfil
                        </button>
                    </div>
                </div>

                <div class="line"></div>

                <div class="bottom-content-card">
                    <div class="BCC-top">
                        <div class="projetos_concluidos">
                            <div class="PC-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="#6d6c7f" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-briefcase w-4 h-4">
                                    <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                                </svg>
                            </div>

                            <div class="PC-text">
                                <span class="projetos_concluidos-text">360</span>
                                <p>Projetos Concluídos</p>
                            </div>
                        </div>

                        <div class="tempo_experiencia">
                            <div class="TE-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-calendar w-6 h-6 text-accent">
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                    <path d="M3 10h18"></path>
                                </svg>
                            </div>

                            <div class="TE-text">
                                <span class="tempo_experiencia-text">3 anos</span>
                                <p>Tempo de Experiência</p>
                            </div>
                        </div>

                        <div class="avaliacao-BCC">
                            <div class="ABCC-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="star pri">
                                    <path
                                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                    </path>
                                </svg>
                            </div>

                            <div class="ABCC-text">
                                <span class="avaliacao-BCC-text">4.0/5.0</span>
                                <p>Avaliação Média</p>
                            </div>
                        </div>
                    </div>

                    <div class="BCC-bottom">
                        <button class="button-telefone">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#6d6c7f" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-phone w-4 h-4">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                </path>
                            </svg>

                            <span class="tl-numero">(14) 99121-1029</span>
                        </button>

                        <button class="button-email">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#6d6c7f" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-mail w-4 h-4">
                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                            </svg>

                            <span class="email-text">diegosf0104@gmail.com</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="mais-informacoes">
            <div class="nav-perfil">
                <button class="button-navper ativo" id="btn_navperfil-sobre">Sobre</button>
                <button class="button-navper" id="btn_navperfil-postagens">Postagens</button>
                <button class="button-navper" id="btn_navperfil-avaliacao">Avaliações</button>
            </div>

            <div class="sobre sessao">
                <div class="sobre_profissional">
                    <h3>Sobre o Profissional</h3>
                    <p>Pedreiro com mais de 15 anos de experiência em construção civil, reformas residenciais e
                        comerciais. Especializado em alvenaria, revestimentos e acabamentos de alta qualidade. Trabalho
                        com seriedade, pontualidade e compromisso com a satisfação do cliente.
                    </p>
                </div>

                <div class="especialidades">
                    <h3>especialidades</h3>
                    <div class="span-esp_op">
                        <span class="especialidade-op">Alvenaria</span>
                    </div>
                    <div class="span-esp_op">
                        <span class="especialidade-op">Revestimento</span>
                    </div>
                    <div class="span-esp_op">
                        <span class="especialidade-op">Fundações</span>
                    </div>
                    <div class="span-esp_op">
                        <span class="especialidade-op">Reformas</span>
                    </div>
                    <div class="span-esp_op">
                        <span class="especialidade-op">Acabamento</span>
                    </div>
                </div>

                <div class="informacoes-contato_redes">
                    <h3>Formas de Contato e Redes Sociais</h3>
                    <div class="telefone">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#6d6c7f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-phone w-4 h-4">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>

                        <span class="telefone-numero">(14) 99121-1029</span>
                    </div>

                    <div class="email">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#6d6c7f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-mail w-4 h-4">
                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                        </svg>

                        <span class="email-text">diegosf0104@gmail.com</span>
                    </div>

                    <div class="instagram">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"
                                    fill="#0048ff"></path>
                                <path
                                    d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z"
                                    fill="#0048ff"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z"
                                    fill="#0048ff"></path>
                            </g>
                        </svg>

                        <span class="name_perfil-ins">diego928</span>
                    </div>

                    <div class="facebook">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M20 1C21.6569 1 23 2.34315 23 4V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H20ZM20 3C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H15V13.9999H17.0762C17.5066 13.9999 17.8887 13.7245 18.0249 13.3161L18.4679 11.9871C18.6298 11.5014 18.2683 10.9999 17.7564 10.9999H15V8.99992C15 8.49992 15.5 7.99992 16 7.99992H18C18.5523 7.99992 19 7.5522 19 6.99992V6.31393C19 5.99091 18.7937 5.7013 18.4813 5.61887C17.1705 5.27295 16 5.27295 16 5.27295C13.5 5.27295 12 6.99992 12 8.49992V10.9999H10C9.44772 10.9999 9 11.4476 9 11.9999V12.9999C9 13.5522 9.44771 13.9999 10 13.9999H12V21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H20Z"
                                    fill="#0048ff"></path>
                            </g>
                        </svg>

                        <span class="name_perfil-fac">Diego de Souza</span>
                    </div>

                    <div class="X">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0,0,256,256">
                            <g fill-rule="nonzero" stroke="#0048ff" stroke-width="4" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal" fill="none">
                                <g transform="scale(5.12,5.12)">
                                    <path
                                        d="M11,4c-3.866,0 -7,3.134 -7,7v28c0,3.866 3.134,7 7,7h28c3.866,0 7,-3.134 7,-7v-28c0,-3.866 -3.134,-7 -7,-7zM13.08594,13h7.9375l5.63672,8.00977l6.83984,-8.00977h2.5l-8.21094,9.61328l10.125,14.38672h-7.93555l-6.54102,-9.29297l-7.9375,9.29297h-2.5l9.30859,-10.89648zM16.91406,15l14.10742,20h3.06445l-14.10742,-20z">
                                    </path>
                                </g>
                            </g>
                        </svg>

                        <span class="name_perfil-x">Diego</span>
                    </div>
                </div>
            </div>

            <div class="publicacoes">
                <button class="btn-add-post">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                    Nova publicação
                </button>

                <div class="home-cards-post">
                    <div class="card-publicacoes">
                        <div class="img-card_publicacoes"></div>
                        <div class="mini-informacoes-card_publicacoes">
                            <h4>Casa Moderna Finalizada</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae accusamus fuga ut aut in
                                asperiores ex eligendi. Natus adipisci, explicabo corrupti distinctio nesciunt facere
                                dolores? Dolorem eius corporis earum tenetur?</p>
                        </div>
                    </div>

                    <div class="card-publicacoes">
                        <div class="img-card_publicacoes"></div>
                        <div class="mini-informacoes-card_publicacoes">
                            <h4>Casa Moderna Finalizada</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae accusamus fuga ut aut in
                                asperiores ex eligendi. Natus adipisci, explicabo corrupti distinctio nesciunt facere
                                dolores? Dolorem eius corporis earum tenetur?</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="avaliacao">
                <div class="top-sess_avali">
                    <div class="top-sess_avali-left">
                        <h3>Avaliação Geral</h3>
                        <span class="quant-stars">4.0</span>
                        <div class="stars">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="star pri">
                                <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="star seg">
                                <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="star ter">
                                <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="star qua">
                                <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                class="star qui">
                                <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                </path>
                            </svg>
                        </div>
                        <p>Baseado em <span class="quant-avaliacoes">4</span> <span
                                class="quant_avaliacoes-text">avaliações</span></p>
                    </div>

                    <div class="top-sess_avali-right">
                        <h3>Distribuição de Avaliações</h3>

                        <div class="distri_avali-content">
                            <div class="distri_avali-content-line" id="quinto">
                                <p>5 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="star qua">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg></p>
                                <div class="progresso-avali quinto"></div>

                                <span class="progresso-avali-porcentagem">78%</span>
                            </div>

                            <div class="distri_avali-content-line" id="quarto">
                                <p>4 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="star qua">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg></p>
                                <div class="progresso-avali quarto"></div>

                                <span class="progresso-avali-porcentagem">18%</span>
                            </div>

                            <div class="distri_avali-content-line" id="terceiro">
                                <p>3 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="star qua">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg></p>
                                <div class="progresso-avali terceiro"></div>

                                <span class="progresso-avali-porcentagem">3%</span>
                            </div>

                            <div class="distri_avali-content-line" id="segundo">
                                <p>2 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="star qua">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg></p>
                                <div class="progresso-avali segundo"></div>

                                <span class="progresso-avali-porcentagem">1%</span>
                            </div>

                            <div class="distri_avali-content-line" id="primeiro">
                                <p>1 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="star qua">
                                        <path
                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                        </path>
                                    </svg></p>
                                <div class="progresso-avali primeiro"></div>

                                <span class="progresso-avali-porcentagem">0%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section pri">
                <div class="ft-logo">
                    <img src="/img/logo.png" alt="logo OPI">
                    <h3 class="footer-title-logo">TCC Plataforma</h3>
                </div>

                <p class="footer-subtitle">Profissionais divulgam seus serviços e clientes encontram mão de obra
                    qualificada com facilidade e confiança.</p>

                <div class="social-links">
                    <a href="#" class="social-link">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0,0,256,256">
                            <g fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(5.12,5.12)">
                                    <path
                                        d="M11,4c-3.866,0 -7,3.134 -7,7v28c0,3.866 3.134,7 7,7h28c3.866,0 7,-3.134 7,-7v-28c0,-3.866 -3.134,-7 -7,-7zM13.08594,13h7.9375l5.63672,8.00977l6.83984,-8.00977h2.5l-8.21094,9.61328l10.125,14.38672h-7.93555l-6.54102,-9.29297l-7.9375,9.29297h-2.5l9.30859,-10.89648zM16.91406,15l14.10742,20h3.06445l-14.10742,-20z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>

                    <a href="#" class="social-link">
                        <svg viewBox="0 0 32 32" id="Camada_1" version="1.1" xml:space="preserve"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <style type="text/css">
                                    .st0 {
                                        fill: #2e2d37;
                                    }
                                </style>
                                <path
                                    d="M6,2h20c2.2,0,4,1.8,4,4v20c0,2.2-1.8,4-4,4H6c-2.2,0-4-1.8-4-4V6C2,3.8,3.8,2,6,2z">
                                </path>
                                <g>
                                    <path class="st0"
                                        d="M21.3,9.7c-0.6,0-1.2,0.5-1.2,1.2c0,0.7,0.5,1.2,1.2,1.2c0.7,0,1.2-0.5,1.2-1.2C22.4,10.2,21.9,9.7,21.3,9.7z">
                                    </path>
                                    <path class="st0"
                                        d="M16,11.2c-2.7,0-4.9,2.2-4.9,4.9c0,2.7,2.2,4.9,4.9,4.9s4.9-2.2,4.9-4.9C21,13.4,18.8,11.2,16,11.2z M16,19.3 c-1.7,0-3.2-1.4-3.2-3.2c0-1.7,1.4-3.2,3.2-3.2c1.7,0,3.2,1.4,3.2,3.2C19.2,17.9,17.8,19.3,16,19.3z">
                                    </path>
                                    <path class="st0"
                                        d="M20,6h-8c-3.3,0-6,2.7-6,6v8c0,3.3,2.7,6,6,6h8c3.3,0,6-2.7,6-6v-8C26,8.7,23.3,6,20,6z M24.1,20 c0,2.3-1.9,4.1-4.1,4.1h-8c-2.3,0-4.1-1.9-4.1-4.1v-8c0-2.3,1.9-4.1,4.1-4.1h8c2.3,0,4.1,1.9,4.1,4.1V20z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="footer-section">
                <h4 class="footer-title">Navegação</h4>
                <ul>
                    <li><a href="#" class="footer-link">Home</a></li>
                    <li><a href="#" class="footer-link">Profissionais</a></li>
                    <li><a href="#" class="footer-link">Empresas</a></li>
                    <li><a href="#" class="footer-link">Sobre Nós</a></li>
                    <li><a href="#" class="footer-link">Como Funciona</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4 class="footer-title">Suporte</h4>
                <ul>
                    <li><a href="#" class="footer-link">Central de Ajuda</a></li>
                    <li><a href="#" class="footer-link">Contato</a></li>
                    <li><a href="#" class="footer-link">FAQ</a></li>
                    <li><a href="#" class="footer-link">Reportar Problema</a></li>
                    <li><a href="#" class="footer-link">Feedback</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4 class="footer-title">Política</h4>
                <ul>
                    <li><a href="#" class="footer-link">Termos de Uso</a></li>
                    <li><a href="#" class="footer-link">Política de Privacidade</a></li>
                    <li><a href="#" class="footer-link">Política de Cookies</a></li>
                    <li><a href="#" class="footer-link">Diretrizes da Comunidade</a></li>
                </ul>
            </div>

            <div class="footer-section end">
                <h4 class="footer-title">Baixe nosso App</h4>

                <p class="footer-subtitle">Acesse nossa plataforma em qualquer lugar</p>

                <div class="app-stores">
                    <a href="#" class="google-play"><svg width="119" height="36" viewBox="0 0 119 36" fill="none"
                            role="img">
                            <g clip-path="url(#clip0_160_6133)">
                                <path
                                    d="M0.447388 6.3C0.447388 4.62914 1.10725 3.02671 2.28182 1.84523C3.45639 0.663748 5.04945 0 6.71055 0L112.289 0C113.951 0 115.544 0.663748 116.718 1.84523C117.893 3.02671 118.553 4.62914 118.553 6.3V28.8378C118.553 30.5087 117.893 32.1111 116.718 33.2926C115.544 34.4741 113.951 35.1378 112.289 35.1378H6.71055C5.04945 35.1378 3.45639 34.4741 2.28182 33.2926C1.10725 32.1111 0.447388 30.5087 0.447388 28.8378V6.3Z"
                                    fill="black"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M112.289 0.63H6.71055C5.21556 0.63 3.78181 1.22737 2.7247 2.2907C1.66758 3.35404 1.0737 4.79622 1.0737 6.3V28.8378C1.0737 30.3416 1.66758 31.7838 2.7247 32.8471C3.78181 33.9104 5.21556 34.5078 6.71055 34.5078H112.289C113.784 34.5078 115.218 33.9104 116.275 32.8471C117.332 31.7838 117.926 30.3416 117.926 28.8378V6.3C117.926 4.79622 117.332 3.35404 116.275 2.2907C115.218 1.22737 113.784 0.63 112.289 0.63ZM6.71055 0C5.04945 0 3.45639 0.663748 2.28182 1.84523C1.10725 3.02671 0.447388 4.62914 0.447388 6.3V28.8378C0.447388 30.5087 1.10725 32.1111 2.28182 33.2926C3.45639 34.4741 5.04945 35.1378 6.71055 35.1378H112.289C113.951 35.1378 115.544 34.4741 116.718 33.2926C117.893 32.1111 118.553 30.5087 118.553 28.8378V6.3C118.553 4.62914 117.893 3.02671 116.718 1.84523C115.544 0.663748 113.951 0 112.289 0H6.71055Z"
                                    fill="black"></path>
                                <path
                                    d="M60.1657 19.1583C58.0863 19.1583 56.4221 20.7486 56.4221 22.923C56.42 23.4181 56.5153 23.9087 56.7027 24.3665C56.8901 24.8244 57.1658 25.2403 57.5138 25.5904C57.8619 25.9405 58.2754 26.2178 58.7306 26.4063C59.1857 26.5948 59.6735 26.6907 60.1657 26.6886C62.245 26.6886 63.9084 25.0983 63.9084 22.923C63.9084 20.664 62.1618 19.1583 60.1657 19.1583ZM60.1657 25.0983C59.0839 25.0983 58.0863 24.1785 58.0863 22.8393C58.0863 21.501 59.0839 20.5803 60.1657 20.5803C61.2465 20.5803 62.245 21.501 62.245 22.8393C62.3283 24.1785 61.2465 25.0983 60.1657 25.0983ZM52.0978 19.1583C50.0185 19.1583 48.3551 20.7486 48.3551 22.923C48.353 23.418 48.4484 23.9085 48.6357 24.3663C48.823 24.8241 49.0986 25.24 49.4466 25.5901C49.7945 25.9402 50.2079 26.2175 50.663 26.406C51.118 26.5946 51.6057 26.6906 52.0978 26.6886C54.1772 26.6886 55.8405 25.0983 55.8405 22.923C55.7573 20.664 54.094 19.1583 52.0978 19.1583ZM52.0978 25.0983C51.0161 25.0983 50.0185 24.1785 50.0185 22.8393C50.0185 21.501 51.0161 20.5803 52.0978 20.5803C53.1787 20.5803 54.1772 21.501 54.1772 22.8393C54.1772 24.1785 53.1787 25.0983 52.0978 25.0983ZM42.3658 20.2464V21.8358H46.1917C46.1085 22.7565 45.7756 23.3415 45.2764 23.8428C44.7771 24.3459 43.8627 25.0146 42.3658 25.0146C40.0368 25.0146 38.2903 23.0904 38.2903 20.7486C38.2903 18.4059 40.12 16.4817 42.3658 16.4817C43.6963 16.4817 44.6116 16.983 45.1931 17.5689L46.2749 16.4817C45.3596 15.7284 44.0291 14.9751 42.1994 14.9751C41.4335 14.9703 40.6743 15.1185 39.9657 15.4111C39.2572 15.7037 38.6135 16.1349 38.072 16.6797C37.5304 17.2244 37.1017 17.8719 36.8108 18.5846C36.5199 19.2973 36.3726 20.061 36.3773 20.8314C36.3773 24.0948 39.1215 26.6886 42.1994 26.6886C43.8627 26.6886 45.1931 26.1027 46.1917 25.0983C47.1893 24.0948 47.6054 22.5891 47.6054 21.3336C47.6054 20.9151 47.6054 20.664 47.5221 20.3301L42.3658 20.2464ZM81.9561 21.501C81.6233 20.664 80.7911 19.1583 78.8782 19.1583C76.9653 19.1583 75.3851 20.6649 75.3851 22.923C75.3851 25.0146 76.9653 26.6886 79.1278 26.6886C80.792 26.6886 81.8729 25.6842 82.2057 25.0983L80.8744 24.2613C80.4583 24.8472 79.8767 25.2657 79.0446 25.2657C78.2125 25.2657 77.6309 24.8472 77.2149 24.1785L82.2048 22.0869L81.9561 21.5019V21.501ZM76.9653 22.7565C76.9653 21.3345 78.047 20.4975 78.8782 20.4975C79.4598 20.4975 80.0423 20.8314 80.2919 21.3345L76.9653 22.7565ZM72.8065 26.4375H74.3866V15.3945H72.8065V26.4375ZM70.2279 19.9953C69.9675 19.7292 69.6568 19.518 69.3142 19.3743C68.9716 19.2306 68.6039 19.1571 68.2326 19.1583C66.3197 19.1583 64.6555 20.7486 64.6555 22.923C64.6555 25.0146 66.3197 26.6886 68.2317 26.6886C68.6031 26.6898 68.971 26.6164 69.3138 26.4727C69.6566 26.3289 69.9674 26.1178 70.2279 25.8516H70.312V26.3538C70.312 27.7758 69.4799 28.6128 68.3158 28.6128C67.3173 28.6128 66.7348 27.9432 66.4029 27.2736L64.9892 27.8586C65.4044 28.863 66.4852 30.1176 68.3158 30.1176C70.2288 30.1176 71.8089 29.0304 71.8089 26.1864V19.4094H70.312L70.2288 19.9944L70.2279 19.9953ZM68.3149 25.0983C67.2341 25.0983 66.2365 24.1785 66.2365 22.8393C66.2365 21.501 67.1509 20.4975 68.3149 20.4975C69.3967 20.4975 70.312 21.501 70.312 22.8393C70.312 24.1785 69.3958 25.0983 68.3149 25.0983ZM89.6911 15.3936H85.7811V26.4366H87.3621V22.1706H89.6911C91.5208 22.1706 93.2674 20.8314 93.2674 18.7407C93.2674 16.6491 91.4376 15.3936 89.6911 15.3936ZM89.6911 20.6649H87.3621V16.8993H89.6911C90.8551 16.8993 91.604 17.9037 91.604 18.8244C91.5208 19.6605 90.8551 20.664 89.6911 20.664V20.6649ZM99.7551 19.1583C98.5901 19.1583 97.3429 19.6605 96.8436 20.9151L98.2573 21.501C98.5901 20.916 99.1726 20.664 99.7551 20.664C100.586 20.664 101.418 21.1662 101.418 22.086V22.1706C101.086 22.0032 100.503 21.7521 99.7551 21.7521C98.1741 21.7521 96.6772 22.6728 96.6772 24.2622C96.6772 25.7679 98.0077 26.6886 99.4223 26.6886C100.503 26.6886 101.086 26.1864 101.502 25.6005H101.585V26.4375H103.165V22.1706C103.082 20.1627 101.585 19.1583 99.7551 19.1583ZM99.5887 25.0983C99.0894 25.0983 98.2573 24.7635 98.2573 24.1785C98.2573 23.3415 99.1726 23.0067 99.9206 23.0067C100.586 23.0067 101.002 23.1741 101.418 23.4252C101.418 24.4296 100.503 25.0983 99.5887 25.0983ZM108.821 19.3257L106.908 24.0948H106.824L104.911 19.3257H103.082L105.992 26.019L104.329 29.7837H105.992L110.484 19.4094H108.821V19.3257ZM94.1818 26.4375H95.7628V15.3945H94.1818V26.4375ZM36.7889 12.5496V7.15946H38.6347C39.0517 7.15946 39.3693 7.18556 39.5885 7.23686C39.8954 7.30796 40.1576 7.43666 40.375 7.62296C40.6577 7.86326 40.868 8.17016 41.0067 8.54546C41.148 8.91806 41.2187 9.34466 41.2187 9.82526C41.2187 10.2339 41.1713 10.5975 41.0765 10.9134C40.9983 11.1938 40.8749 11.4596 40.7114 11.7C40.5779 11.8906 40.4119 12.0561 40.2211 12.1887C40.0457 12.3066 39.8328 12.3957 39.5814 12.4578C39.2997 12.5227 39.0113 12.5535 38.7224 12.5496H36.7889ZM37.4984 11.9133H38.6419C38.9953 11.9133 39.2718 11.88 39.4722 11.8143C39.6744 11.7477 39.8346 11.655 39.9545 11.5353C40.1365 11.3424 40.2705 11.1089 40.3455 10.854C40.4403 10.5678 40.4886 10.2204 40.4886 9.81446C40.4886 9.25016 40.3956 8.81726 40.2104 8.51576C40.0269 8.21246 39.8042 8.00906 39.5411 7.90556C39.3514 7.83266 39.0454 7.79576 38.624 7.79576H37.4984V11.9133ZM42.1179 7.91996V7.15946H42.7765V7.92086L42.1179 7.91996ZM42.1179 12.5496V8.64446H42.7765V12.5496H42.1179ZM43.5182 11.3841L44.1687 11.2806C44.2045 11.5434 44.3065 11.7441 44.472 11.8836C44.6402 12.024 44.8746 12.0933 45.1735 12.0933C45.4759 12.0933 45.7005 12.0321 45.8463 11.9097C45.9922 11.7846 46.0655 11.6388 46.0655 11.4723C46.067 11.4016 46.0499 11.3317 46.0159 11.2698C45.982 11.2078 45.9325 11.156 45.8723 11.1195C45.7819 11.0601 45.5573 10.9854 45.1994 10.8945C44.7163 10.7721 44.3816 10.6668 44.1946 10.5795C44.0209 10.4988 43.8737 10.3698 43.7705 10.2078C43.6754 10.0489 43.6258 9.86669 43.6274 9.68126C43.6274 9.50756 43.6667 9.34736 43.7446 9.19976C43.8251 9.05036 43.9334 8.92706 44.0703 8.82896C44.1723 8.75246 44.3118 8.68856 44.4863 8.63726C44.6653 8.58326 44.8549 8.55626 45.0572 8.55626C45.3614 8.55626 45.628 8.60126 45.857 8.68856C46.0888 8.77676 46.2597 8.89736 46.3688 9.04856C46.4789 9.19886 46.554 9.39956 46.5952 9.65156L45.9519 9.74066C45.9318 9.5561 45.8402 9.38695 45.6969 9.26996C45.5573 9.15746 45.3605 9.10076 45.1046 9.10076C44.8021 9.10076 44.5865 9.15116 44.4577 9.25106C44.3279 9.35186 44.2635 9.46976 44.2635 9.60476C44.2635 9.69026 44.2904 9.76676 44.344 9.83606C44.3977 9.90716 44.4818 9.96566 44.5964 10.0125C44.6617 10.0368 44.8558 10.0935 45.1779 10.1817C45.6432 10.3068 45.9671 10.4094 46.1496 10.4904C46.3348 10.5687 46.4798 10.6839 46.5845 10.836C46.6891 10.9881 46.7419 11.1771 46.7419 11.403C46.7419 11.6226 46.6775 11.8314 46.5478 12.0276C46.4114 12.229 46.2196 12.3861 45.9957 12.4794C45.7542 12.5847 45.4822 12.6378 45.177 12.6378C44.6733 12.6378 44.2877 12.5325 44.0228 12.3219C43.7589 12.1104 43.5907 11.7981 43.5182 11.3841ZM47.5239 14.0454V8.64536H48.1234V9.15206C48.2648 8.95406 48.424 8.80556 48.6021 8.70746C48.7801 8.60666 48.9958 8.55626 49.249 8.55626C49.58 8.55626 49.8726 8.64266 50.1258 8.81366C50.3799 8.98556 50.5714 9.22766 50.7003 9.54266C50.8291 9.85316 50.8935 10.1952 50.8935 10.5678C50.8935 10.9674 50.8219 11.3274 50.6788 11.6478C50.5365 11.9673 50.3298 12.2121 50.0569 12.384C49.7867 12.5532 49.5013 12.6378 49.2016 12.6378C48.9824 12.6378 48.7846 12.591 48.6093 12.4983C48.4439 12.4114 48.2983 12.2909 48.1816 12.1446V14.0454H47.5239ZM48.1198 10.6191C48.1198 11.1213 48.2209 11.493 48.4231 11.7333C48.6254 11.9736 48.8705 12.0933 49.1577 12.0933C49.4503 12.0933 49.6999 11.97 49.9066 11.7225C50.1169 11.4723 50.2216 11.0862 50.2216 10.5642C50.2216 10.0665 50.1187 9.69386 49.9147 9.44636C49.7125 9.19886 49.47 9.07466 49.1873 9.07466C48.9072 9.07466 48.6585 9.20696 48.441 9.47156C48.2263 9.73436 48.1198 10.1169 48.1198 10.6191ZM51.4456 10.5975C51.4456 9.87386 51.646 9.33836 52.045 8.99006C52.3788 8.70116 52.7859 8.55626 53.2664 8.55626C53.7996 8.55626 54.2363 8.73266 54.5745 9.08636C54.9136 9.43736 55.0827 9.92156 55.0827 10.5417C55.0827 11.0448 55.0066 11.4399 54.8563 11.7297C54.7078 12.0159 54.4895 12.2391 54.2014 12.3984C53.9155 12.558 53.5933 12.6405 53.2664 12.6378C52.7224 12.6378 52.2821 12.4623 51.9466 12.1122C51.6129 11.7612 51.4456 11.2572 51.4456 10.5975ZM52.122 10.5975C52.122 11.097 52.2303 11.4723 52.4477 11.7225C52.6642 11.97 52.9371 12.0933 53.2664 12.0933C53.5929 12.0933 53.864 11.9682 54.0806 11.7189C54.298 11.4687 54.4063 11.0871 54.4063 10.5759C54.4063 10.0926 54.2971 9.72716 54.0779 9.47966C53.9791 9.36004 53.855 9.26422 53.7145 9.19927C53.5741 9.13431 53.4209 9.10188 53.2664 9.10436C52.9371 9.10436 52.6642 9.22856 52.4477 9.47606C52.2303 9.72356 52.122 10.0971 52.122 10.5975ZM55.8575 12.5496V8.64446H56.4498V9.19976C56.7344 8.77136 57.1468 8.55626 57.6846 8.55626C57.919 8.55626 58.1337 8.59946 58.3288 8.68496C58.5256 8.76866 58.6733 8.87846 58.7708 9.01616C58.8683 9.15296 58.9363 9.31676 58.9748 9.50486C58.9998 9.62726 59.0115 9.84236 59.0115 10.1484V12.5496H58.3538V10.1736C58.3538 9.90446 58.3279 9.70376 58.2769 9.57056C58.2252 9.43535 58.1284 9.3224 58.0031 9.25106C57.8654 9.16822 57.7072 9.12639 57.5468 9.13046C57.2658 9.13046 57.0234 9.21956 56.8185 9.39866C56.6163 9.57776 56.5152 9.91706 56.5152 10.4166V12.5496H55.8575ZM60.2543 12.5496V8.64446H60.9128V12.5496H60.2543ZM60.2211 8.15936L60.7079 7.12976H61.5704L60.766 8.15936H60.2211ZM63.1863 12.5496L61.71 8.64446H62.4034L63.2373 10.9827C63.3268 11.2356 63.41 11.4975 63.4852 11.7702C63.5442 11.5632 63.6256 11.3166 63.7303 11.0277L64.5928 8.64446H65.2693L63.8001 12.5496H63.1863ZM68.5073 11.2923L69.1873 11.3769C69.0799 11.7765 68.8813 12.0861 68.5914 12.3066C68.3015 12.5271 67.9311 12.6378 67.4801 12.6378C66.9129 12.6378 66.4619 12.4623 66.1282 12.1122C65.7971 11.7585 65.6307 11.2653 65.6307 10.6299C65.6307 9.97286 65.7989 9.46346 66.1354 9.10076C66.4718 8.73806 66.9075 8.55626 67.4444 8.55626C67.9633 8.55626 68.3865 8.73446 68.7158 9.08996C69.045 9.44546 69.2097 9.94496 69.2097 10.5894L69.2061 10.7667H66.3107C66.3349 11.1951 66.4557 11.5236 66.6731 11.7513C66.8896 11.9799 67.1598 12.0933 67.4846 12.0933C67.7262 12.0933 67.932 12.0303 68.102 11.9025C68.272 11.7747 68.408 11.5713 68.5073 11.2923ZM66.3474 10.2213H68.5145C68.4858 9.89366 68.4026 9.64706 68.2666 9.48326C68.1695 9.3604 68.0453 9.26191 67.9038 9.19553C67.7624 9.12916 67.6075 9.09672 67.4515 9.10076C67.1491 9.10076 66.8941 9.20246 66.6874 9.40586C66.4825 9.60926 66.3698 9.88016 66.3474 10.2213ZM70.0024 12.5496V7.15946H70.66V12.5496H70.0024ZM76.4239 11.2923L77.1039 11.3769C76.9966 11.7765 76.7988 12.0861 76.5089 12.3066C76.2182 12.5271 75.8477 12.6378 75.3977 12.6378C74.8295 12.6378 74.3786 12.4623 74.0448 12.1122C73.7138 11.7585 73.5483 11.2653 73.5483 10.6299C73.5483 9.97286 73.7165 9.46346 74.052 9.10076C74.3884 8.73806 74.825 8.55626 75.361 8.55626C75.8799 8.55626 76.304 8.73446 76.6324 9.08996C76.9617 9.44546 77.1263 9.94496 77.1263 10.5894L77.1227 10.7667H74.2274C74.2524 11.1951 74.3732 11.5236 74.5897 11.7513C74.8063 11.9799 75.0765 12.0933 75.4013 12.0933C75.6428 12.0933 75.8486 12.0303 76.0186 11.9025C76.1886 11.7747 76.3246 11.5713 76.4239 11.2923ZM74.264 10.2213H76.432C76.4025 9.89366 76.3193 9.64706 76.1833 9.48326C76.0861 9.3604 75.9619 9.26191 75.8204 9.19553C75.679 9.12916 75.5242 9.09672 75.3681 9.10076C75.0657 9.10076 74.8116 9.20246 74.604 9.40586C74.3991 9.60926 74.2864 9.88016 74.264 10.2213ZM77.9343 12.5496V8.64446H78.5221V9.19346C78.6438 9.00176 78.8066 8.84786 79.0088 8.73266C79.211 8.61566 79.441 8.55626 79.6996 8.55626C79.9868 8.55626 80.2221 8.61656 80.4046 8.73626C80.5898 8.85686 80.7205 9.02426 80.7956 9.24026C81.1025 8.78486 81.5025 8.55626 81.9946 8.55626C82.3793 8.55626 82.6755 8.66426 82.883 8.88026C83.0897 9.09356 83.1935 9.42296 83.1935 9.86936V12.5496H82.5395V10.089C82.5395 9.82436 82.5171 9.63446 82.4733 9.51926C82.4315 9.40087 82.3502 9.3007 82.2433 9.23576C82.1246 9.16304 81.9877 9.12618 81.8487 9.12956C81.5758 9.12956 81.3495 9.22136 81.1687 9.40496C80.988 9.58586 80.8985 9.87836 80.8985 10.2798V12.5478H80.24V10.0116C80.24 9.71726 80.1863 9.49676 80.0789 9.35006C79.9716 9.20246 79.7971 9.12956 79.5528 9.12956C79.3707 9.12864 79.1921 9.17949 79.0375 9.27626C78.8792 9.37708 78.7594 9.52865 78.6975 9.70646C78.6268 9.89546 78.5919 10.1673 78.5919 10.5228V12.5478H77.9343V12.5496Z"
                                    fill="white"></path>
                                <path
                                    d="M9.67926 6.69336C9.51284 6.85986 9.2641 7.36206 9.2641 7.86336V27.2737C9.2641 27.7759 9.42963 28.2781 9.67926 28.4455L9.76247 28.5283L20.5754 17.6527V17.4853L9.67926 6.69336Z"
                                    fill="url(#paint0_linear_160_6133)"></path>
                                <path
                                    d="M24.2348 21.3336L20.6586 17.7363V17.5689L24.2348 13.9716H24.318L28.6432 16.398C29.8073 17.0667 29.8073 18.2385 28.6432 18.9072L24.2348 21.3336Z"
                                    fill="url(#paint1_linear_160_6133)"></path>
                                <path
                                    d="M24.318 21.2499L20.5754 17.4852L9.67926 28.4454C10.0953 28.8639 10.761 28.9467 11.509 28.5291L24.3189 21.249L24.318 21.2499Z"
                                    fill="url(#paint2_linear_160_6133)"></path>
                                <path
                                    d="M24.318 13.887L11.509 6.52504C10.8442 6.10744 10.0953 6.10744 9.67926 6.60964L20.5754 17.568L24.318 13.887Z"
                                    fill="url(#paint3_linear_160_6133)"></path>
                                <path opacity="0.2"
                                    d="M24.2348 21.2499L11.5099 28.53C10.8442 28.9476 10.1785 28.9476 9.84566 28.53L9.76245 28.6137L9.84566 28.6974C10.2617 29.115 10.8442 29.115 11.5099 28.6974L24.2348 21.2499Z"
                                    fill="black"></path>
                                <path opacity="0.12"
                                    d="M9.67926 28.4453C9.51284 28.1105 9.2641 27.7757 9.2641 27.2735V27.3572C9.2641 27.8594 9.42963 28.3616 9.67926 28.529V28.4453ZM28.6432 18.7406L24.2348 21.2498L24.318 21.3335L28.6432 18.908C29.2248 18.5732 29.5576 18.071 29.5576 17.5688C29.4744 18.071 29.1416 18.4058 28.6432 18.7406Z"
                                    fill="black"></path>
                                <path opacity="0.25"
                                    d="M11.509 6.77703L28.56 16.5654C29.1416 16.9002 29.4744 17.2341 29.4744 17.6526C29.4744 17.1504 29.1416 16.7328 28.56 16.3143L11.509 6.52503C10.3449 5.85543 9.3464 6.44133 9.3464 7.86333V7.94703C9.26408 6.52503 10.3449 6.02283 11.509 6.77613V6.77703Z"
                                    fill="white"></path>
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_160_6133" x1="19.669" y1="7.66536" x2="4.91195"
                                    y2="22.3361" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#00A0FF"></stop>
                                    <stop offset="0.007" stop-color="#00A1FF"></stop>
                                    <stop offset="0.26" stop-color="#00BEFF"></stop>
                                    <stop offset="0.512" stop-color="#00D2FF"></stop>
                                    <stop offset="0.76" stop-color="#00DFFF"></stop>
                                    <stop offset="1" stop-color="#00E3FF"></stop>
                                </linearGradient>
                                <linearGradient id="paint1_linear_160_6133" x1="30.1893" y1="17.64" x2="9.03862"
                                    y2="17.64" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FFE000"></stop>
                                    <stop offset="0.409" stop-color="#FFBD00"></stop>
                                    <stop offset="0.775" stop-color="#FFA500"></stop>
                                    <stop offset="1" stop-color="#FF9C00"></stop>
                                </linearGradient>
                                <linearGradient id="paint2_linear_160_6133" x1="22.2897" y1="19.5876" x2="2.27942"
                                    y2="39.4809" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF3A44"></stop>
                                    <stop offset="1" stop-color="#C31162"></stop>
                                </linearGradient>
                                <linearGradient id="paint3_linear_160_6133" x1="6.97358" y1="0.183635" x2="15.9086"
                                    y2="9.06733" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#32A071"></stop>
                                    <stop offset="0.069" stop-color="#2DA771"></stop>
                                    <stop offset="0.476" stop-color="#15CF74"></stop>
                                    <stop offset="0.801" stop-color="#06E775"></stop>
                                    <stop offset="1" stop-color="#00F076"></stop>
                                </linearGradient>
                                <clipPath id="clip0_160_6133">
                                    <rect width="119" height="36" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>

                    <a href="#" class="app-store"><svg width="121" height="36" viewBox="0 0 121 36" fill="none"
                            role="img">
                            <g clip-path="url(#clip0_160_6134)">
                                <path
                                    d="M0.454895 6.3C0.454895 4.62914 1.12585 3.02671 2.32016 1.84523C3.51447 0.663748 5.13431 0 6.82332 0L114.177 0C115.866 0 117.486 0.663748 118.68 1.84523C119.874 3.02671 120.545 4.62914 120.545 6.3V28.8378C120.545 30.5087 119.874 32.1111 118.68 33.2926C117.486 34.4741 115.866 35.1378 114.177 35.1378H6.82332C5.13431 35.1378 3.51447 34.4741 2.32016 33.2926C1.12585 32.1111 0.454895 30.5087 0.454895 28.8378V6.3Z"
                                    fill="black"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M114.177 0.63H6.82332C5.30321 0.63 3.84536 1.22737 2.77048 2.2907C1.6956 3.35404 1.09174 4.79622 1.09174 6.3V28.8378C1.09174 30.3416 1.6956 31.7838 2.77048 32.8471C3.84536 33.9104 5.30321 34.5078 6.82332 34.5078H114.177C115.697 34.5078 117.155 33.9104 118.23 32.8471C119.304 31.7838 119.908 30.3416 119.908 28.8378V6.3C119.908 4.79622 119.304 3.35404 118.23 2.2907C117.155 1.22737 115.697 0.63 114.177 0.63ZM6.82332 0C5.13431 0 3.51447 0.663748 2.32016 1.84523C1.12585 3.02671 0.454895 4.62914 0.454895 6.3V28.8378C0.454895 30.5087 1.12585 32.1111 2.32016 33.2926C3.51447 34.4741 5.13431 35.1378 6.82332 35.1378H114.177C115.866 35.1378 117.486 34.4741 118.68 33.2926C119.874 32.1111 120.545 30.5087 120.545 28.8378V6.3C120.545 4.62914 119.874 3.02671 118.68 1.84523C117.486 0.663748 115.866 0 114.177 0H6.82332Z"
                                    fill="black"></path>
                                <path
                                    d="M25.1698 17.8389C25.1698 14.7672 27.81 13.1769 27.9201 13.1769C26.4899 11.1645 24.0699 10.7406 23.3002 10.7406C21.3197 10.5291 19.4501 11.9061 18.5694 11.9061C17.4695 11.9061 16.0402 10.7406 14.2798 10.8468C12.1892 10.8468 10.2095 12.0123 9.10958 13.9194C6.90884 17.6274 8.55917 23.1363 10.6498 26.2089C11.7497 27.7983 13.0698 29.2815 14.6092 29.2815C16.1494 29.1753 16.8099 28.2222 18.6795 28.2222C20.55 28.2222 21.2105 29.2815 22.7498 29.07C24.5102 29.07 25.5001 27.4806 26.6 26.1036C27.81 24.408 28.3604 22.8186 28.3604 22.6071C28.4705 22.8186 25.1698 21.5478 25.1698 17.8389ZM21.9802 8.83349C22.8599 7.77419 23.4103 6.39719 23.3002 5.01929C22.0902 5.01929 20.55 5.86709 19.5602 6.82109C18.7896 7.66799 18.13 9.25739 18.2401 10.5291C19.6702 10.6344 21.2105 9.89279 21.9802 8.83349ZM44.5407 23.2947H39.9828L38.8665 26.469H36.8195L41.2856 14.5854H43.3317L47.7031 26.469H45.6561L44.5407 23.2947ZM40.3558 21.7521H44.0759L42.3082 16.4907L40.3549 21.7521H40.3558ZM57.1912 22.2057C57.1912 24.9273 55.7028 26.5599 53.4702 26.5599C52.2611 26.5599 51.2376 26.0154 50.6799 25.0182V29.2815H48.9122V17.7606H50.6799V19.2123C50.9715 18.7393 51.3815 18.3489 51.8703 18.0786C52.3592 17.8084 52.9102 17.6675 53.4702 17.6697C55.61 17.6697 57.1912 19.3932 57.1912 22.2057ZM55.3307 22.2057C55.3307 20.4822 54.4009 19.2123 53.0053 19.2123C51.7034 19.2123 50.6799 20.3913 50.6799 22.2057C50.6799 24.0201 51.6097 25.1991 53.0053 25.1991C54.4009 25.0182 55.3307 23.9301 55.3307 22.2057ZM66.9576 22.2057C66.9576 24.9273 65.4692 26.5599 63.2366 26.5599C62.0275 26.5599 61.0049 26.0154 60.4463 25.0182V29.2815H58.6805V17.7606H60.3544V19.2123C60.646 18.7393 61.056 18.3489 61.5449 18.0786C62.0337 17.8084 62.5848 17.6675 63.1447 17.6697C65.3773 17.6697 66.9576 19.3932 66.9576 22.2057ZM65.0043 22.2057C65.0043 20.4822 64.0745 19.2123 62.6789 19.2123C61.377 19.2123 60.3535 20.3913 60.3535 22.2057C60.3535 24.0201 61.2842 25.1991 62.6789 25.1991C64.1673 25.0182 65.0043 23.9301 65.0043 22.2057ZM73.2832 23.1129C73.376 24.2919 74.5851 25.1082 76.1672 25.1082C77.7475 25.1082 78.8638 24.3828 78.8638 23.2038C78.8638 22.2966 78.2124 21.7521 76.6312 21.2985L75.05 20.9358C72.8184 20.3913 71.7949 19.3932 71.7949 17.7606C71.7949 15.6735 73.5616 14.2227 76.1663 14.2227C78.771 14.2227 80.5387 15.6744 80.5387 17.7597H78.771C78.6782 16.5807 77.6547 15.8553 76.1663 15.8553C74.6779 15.8553 73.7481 16.5807 73.7481 17.5788C73.7481 18.486 74.3995 18.9396 75.9807 19.3023L77.2826 19.6659C79.7008 20.2095 80.7243 21.2076 80.7243 22.9311C80.7243 25.1091 78.9566 26.5599 75.9807 26.5599C73.2832 26.5599 71.5156 25.1991 71.4228 23.0229C71.5156 23.2947 73.2832 23.1129 73.2832 23.1129ZM84.7237 15.7644V17.8515H86.3977V19.2123H84.7237V24.0201C84.7237 24.7455 85.0967 25.1091 85.84 25.1091H86.3986V26.5599C86.2121 26.5599 85.84 26.6508 85.3751 26.6508C83.6083 26.6508 82.9569 26.0154 82.9569 24.3828V19.2123H81.655V17.7606H82.8641V15.6735L84.7237 15.7644ZM87.3283 22.2057C87.3283 19.4841 89.0023 17.8515 91.5142 17.8515C94.1189 17.8515 95.7001 19.575 95.7001 22.2057C95.7001 24.9273 94.0261 26.5599 91.5142 26.5599C89.0032 26.5599 87.3283 24.9273 87.3283 22.2057ZM93.9324 22.2057C93.9324 20.3004 93.0026 19.2123 91.607 19.2123C90.1195 19.2123 89.2816 20.3013 89.2816 22.2057C89.2816 24.111 90.2123 25.1991 91.607 25.1991C93.0026 25.1091 93.9324 24.0201 93.9324 22.2057ZM97.2813 17.7597H98.9553V19.2123C99.1418 18.2133 100.072 17.6697 101.095 17.6697C101.281 17.6697 101.56 17.6697 101.746 17.7597V19.3932C101.653 19.3032 101.281 19.3032 101.002 19.3032C99.886 19.3032 99.1418 20.0286 99.1418 21.2985V26.469H97.3741C97.2813 26.469 97.2813 17.7597 97.2813 17.7597ZM110.211 23.9292C110.024 25.4718 108.443 26.5599 106.397 26.5599C103.793 26.5599 102.211 24.9273 102.211 22.2057C102.211 19.4841 103.793 17.6697 106.397 17.6697C108.815 17.6697 110.397 19.3023 110.397 21.9339V22.5684H103.978V22.7502C103.978 24.2919 104.909 25.1991 106.304 25.1991C107.327 25.1991 108.071 24.7455 108.351 24.0201C108.351 23.9301 110.211 23.9301 110.211 23.9301V23.9292ZM103.978 21.2985H108.443C108.443 19.9377 107.514 19.1205 106.304 19.1205C105.002 19.1205 104.165 19.9377 103.978 21.2985ZM36.8204 12.1122V6.72209H38.6973C39.1212 6.72209 39.4442 6.74819 39.6671 6.79949C39.9791 6.87059 40.2457 6.99929 40.4659 7.18559C40.7534 7.42589 40.9681 7.73369 41.1091 8.10809C41.2528 8.48069 41.3247 8.90729 41.3247 9.38789C41.3247 9.79739 41.2765 10.1601 41.1791 10.476C41.0997 10.7565 40.9743 11.0222 40.8079 11.2626C40.6725 11.4535 40.504 11.6193 40.3103 11.7522C40.132 11.8692 39.9145 11.9592 39.6598 12.0204C39.3734 12.0853 39.0802 12.1161 38.7864 12.1122H36.8204ZM37.5409 11.4759H38.7045C39.0639 11.4759 39.345 11.4426 39.5479 11.3769C39.7535 11.3103 39.9173 11.2176 40.0392 11.0979C40.2102 10.9287 40.3421 10.7019 40.4368 10.4175C40.5332 10.1304 40.5814 9.78389 40.5814 9.37709C40.5814 8.81279 40.4868 8.38079 40.2994 8.07929C40.1129 7.77509 39.8863 7.57169 39.6189 7.46819C39.426 7.39529 39.1149 7.35839 38.6863 7.35839H37.5409V11.4759ZM42.239 7.48349V6.72209H42.9077V7.48349H42.239ZM42.239 12.1122V8.20799H42.9077V12.1122H42.239ZM43.6619 10.9467L44.3242 10.8441C44.3606 11.106 44.4643 11.3067 44.6326 11.4471C44.8037 11.5866 45.042 11.6559 45.3459 11.6559C45.6534 11.6559 45.8808 11.5947 46.03 11.4723C46.1783 11.3472 46.2529 11.2023 46.2529 11.0349C46.2543 10.9641 46.2368 10.8942 46.2021 10.8323C46.1675 10.7703 46.1169 10.7185 46.0555 10.6821C45.9645 10.6227 45.7362 10.548 45.3723 10.4571C44.881 10.3347 44.5407 10.2294 44.3497 10.1421C44.173 10.0615 44.0234 9.93247 43.9185 9.77039C43.8221 9.61175 43.7721 9.42984 43.7738 9.24479C43.7738 9.07019 43.8138 8.90999 43.8921 8.76239C43.974 8.61299 44.0849 8.48969 44.2232 8.39159C44.3279 8.31509 44.4689 8.25209 44.6472 8.19989C44.8282 8.14589 45.0211 8.11889 45.2267 8.11889C45.536 8.11889 45.8081 8.16389 46.041 8.25209C46.2766 8.34029 46.4504 8.45999 46.5614 8.61209C46.6723 8.76149 46.7497 8.96309 46.7915 9.21509L46.1374 9.30329C46.1168 9.11859 46.0233 8.94941 45.8772 8.83259C45.7362 8.72009 45.5351 8.66339 45.2749 8.66339C44.9683 8.66339 44.7491 8.71379 44.6172 8.81459C44.4862 8.91449 44.4207 9.03239 44.4207 9.16739C44.4207 9.25289 44.4479 9.32939 44.5025 9.39869C44.5571 9.47069 44.6426 9.52919 44.7591 9.57509C44.8255 9.59939 45.0229 9.65609 45.3504 9.74429C45.8235 9.86939 46.1529 9.97199 46.3385 10.053C46.5268 10.1313 46.6742 10.2465 46.7806 10.3986C46.8871 10.5516 46.9398 10.7397 46.9398 10.9656C46.9398 11.1861 46.8743 11.394 46.7433 11.5902C46.6047 11.7917 46.4096 11.9487 46.182 12.042C45.9363 12.1473 45.6598 12.2004 45.3495 12.2004C44.8364 12.2004 44.4452 12.0951 44.1759 11.8845C43.9075 11.673 43.7365 11.3607 43.6619 10.9467ZM47.7359 13.608V8.20799H48.3454V8.71469C48.4892 8.51669 48.6511 8.36819 48.8322 8.27009C49.0132 8.16929 49.2325 8.11979 49.4899 8.11979C49.8265 8.11979 50.124 8.20529 50.3815 8.37629C50.639 8.54819 50.8337 8.79029 50.9656 9.10529C51.0966 9.41579 51.1621 9.75779 51.1621 10.1313C51.1621 10.53 51.0893 10.89 50.9437 11.2113C50.8134 11.5143 50.5928 11.7707 50.3114 11.9466C50.0358 12.1158 49.7465 12.2004 49.4417 12.2004C49.2188 12.2004 49.0177 12.1536 48.8394 12.0609C48.6713 11.974 48.5233 11.8535 48.4046 11.7072V13.6089H47.7359V13.608ZM48.3418 10.1817C48.3418 10.6839 48.4446 11.0556 48.6502 11.2959C48.8558 11.5362 49.1051 11.6559 49.3962 11.6559C49.6946 11.6559 49.9484 11.5326 50.1586 11.2851C50.3715 11.0349 50.4779 10.6488 50.4779 10.1268C50.4779 9.62909 50.3742 9.25649 50.1659 9.00899C49.9603 8.76149 49.7137 8.63819 49.4262 8.63819C49.1415 8.63819 48.8895 8.77049 48.6684 9.03419C48.45 9.29699 48.3409 9.67949 48.3409 10.1817H48.3418ZM51.7234 10.1601C51.7234 9.43649 51.9263 8.90099 52.333 8.55359C52.6723 8.26379 53.0863 8.11979 53.5739 8.11979C54.117 8.11979 54.5601 8.29619 54.9049 8.64899C55.2488 8.99999 55.4216 9.48419 55.4216 10.1043C55.4216 10.6074 55.3443 11.0034 55.1906 11.2923C55.0395 11.5794 54.8176 11.8017 54.5264 11.961C54.2352 12.1209 53.907 12.2034 53.5739 12.2004C53.0217 12.2004 52.5741 12.0249 52.2329 11.6748C51.8935 11.3238 51.7234 10.8198 51.7234 10.1601ZM52.4112 10.1601C52.4112 10.6596 52.5204 11.0349 52.7415 11.2851C52.9625 11.5326 53.24 11.6559 53.5739 11.6559C53.906 11.6559 54.1825 11.5308 54.4027 11.2815C54.6238 11.0313 54.7339 10.6497 54.7339 10.1385C54.7339 9.65519 54.622 9.28979 54.3991 9.04229C54.2987 8.92261 54.1724 8.82676 54.0296 8.7618C53.8868 8.69685 53.7311 8.66444 53.5739 8.66699C53.24 8.66699 52.9625 8.79119 52.7415 9.03869C52.5213 9.28619 52.4112 9.65969 52.4112 10.1601ZM56.2095 12.1122V8.20799H56.8109V8.76239C57.102 8.33399 57.5205 8.11979 58.0673 8.11979C58.3056 8.11979 58.5231 8.16209 58.7223 8.24849C58.9225 8.33129 59.0717 8.44199 59.1708 8.57879C59.2709 8.71649 59.34 8.87939 59.3801 9.06749C59.4037 9.19079 59.4165 9.40499 59.4165 9.71099V12.1122H58.7478V9.73709C58.7478 9.46709 58.7214 9.26639 58.6695 9.13409C58.617 8.99887 58.5186 8.88593 58.3912 8.81459C58.251 8.73122 58.0897 8.68907 57.9263 8.69309C57.6546 8.68831 57.3908 8.78394 57.1866 8.96129C56.981 9.14039 56.8782 9.47969 56.8782 9.98009V12.1122H56.2095ZM60.6801 12.1122V8.20799H61.3488V12.1122H60.6801ZM60.6465 7.72199L61.1405 6.69329H62.0184L61.1996 7.72199H60.6465ZM63.6606 12.1122L62.1594 8.20799H62.8654L63.7124 10.5462C63.8043 10.7982 63.8889 11.061 63.9653 11.3328C64.0254 11.1267 64.1082 10.8792 64.2146 10.5903L65.0916 8.20799H65.7794L64.2856 12.1122H63.6606ZM69.0719 10.854L69.7633 10.9395C69.6542 11.3391 69.4522 11.6487 69.1574 11.8692C68.8627 12.0897 68.486 12.2004 68.0275 12.2004C67.4507 12.2004 66.9922 12.0249 66.6528 11.6748C66.3162 11.322 66.147 10.8279 66.147 10.1934C66.147 9.53639 66.318 9.02609 66.6601 8.66339C67.0022 8.30069 67.4452 8.11979 67.9902 8.11979C68.5178 8.11979 68.9491 8.29709 69.2839 8.65259C69.6187 9.00809 69.7852 9.50759 69.7852 10.1529C69.7852 10.1916 69.7843 10.2501 69.7815 10.3293H66.8384C66.863 10.7577 66.9858 11.0862 67.206 11.3139C67.427 11.5425 67.7018 11.6559 68.0311 11.6559C68.2768 11.6559 68.486 11.5929 68.6589 11.4651C68.8326 11.3373 68.97 11.133 69.0719 10.854ZM66.8757 9.78479H69.0792C69.0492 9.45629 68.9655 9.20969 68.8263 9.04589C68.7276 8.92315 68.6014 8.82473 68.4578 8.75836C68.3141 8.69199 68.1569 8.65948 67.9984 8.66339C67.6909 8.66339 67.4316 8.76509 67.2214 8.96939C67.0122 9.17189 66.8975 9.44369 66.8757 9.78479ZM70.5921 12.1122V6.72209H71.2608V12.1122H70.5921ZM77.1216 10.854L77.813 10.9395C77.7038 11.3391 77.5019 11.6487 77.2071 11.8692C76.9123 12.0897 76.5357 12.2004 76.0772 12.2004C75.5004 12.2004 75.0418 12.0249 74.7025 11.6748C74.3659 11.322 74.1967 10.8279 74.1967 10.1934C74.1967 9.53639 74.3677 9.02609 74.7098 8.66339C75.0518 8.30069 75.4949 8.11979 76.0408 8.11979C76.5684 8.11979 76.9988 8.29709 77.3336 8.65259C77.6684 9.00809 77.8358 9.50759 77.8358 10.1529C77.8358 10.1916 77.8339 10.2501 77.8312 10.3293H74.8881C74.9127 10.7577 75.0355 11.0862 75.2565 11.3139C75.4767 11.5425 75.7515 11.6559 76.0808 11.6559C76.3264 11.6559 76.5357 11.5929 76.7085 11.4651C76.8823 11.3373 77.0206 11.133 77.1216 10.854ZM74.9254 9.78479H77.1289C77.0997 9.45629 77.0151 9.20969 76.8769 9.04589C76.7781 8.92303 76.6518 8.82453 76.5079 8.75816C76.3641 8.69178 76.2067 8.65934 76.048 8.66339C75.7405 8.66339 75.4813 8.76509 75.2711 8.96939C75.0628 9.17189 74.9472 9.44369 74.9254 9.78479ZM78.6564 12.1122V8.20799H79.255V8.75519C79.3789 8.56426 79.5486 8.40659 79.749 8.29619C79.9555 8.17829 80.1893 8.11979 80.4514 8.11979C80.7443 8.11979 80.9836 8.17919 81.1692 8.29979C81.3575 8.41949 81.4903 8.58779 81.5667 8.80379C81.8788 8.34749 82.2855 8.11979 82.7858 8.11979C83.177 8.11979 83.4782 8.22779 83.6892 8.44289C83.8994 8.65619 84.0049 8.98559 84.0049 9.43199V12.1122H83.3399V9.65249C83.3399 9.38789 83.3171 9.19799 83.2726 9.08279C83.2301 8.9644 83.1475 8.86422 83.0388 8.79929C82.9178 8.7264 82.7782 8.68953 82.6366 8.69309C82.3601 8.69309 82.129 8.78489 81.9452 8.96849C81.7633 9.15029 81.6705 9.44189 81.6705 9.84329V12.1113H81.0018V9.57599C81.0018 9.28169 80.9472 9.06119 80.838 8.91449C80.7288 8.76779 80.5505 8.69399 80.3031 8.69399C80.1147 8.69399 79.9401 8.74259 79.779 8.84069C79.6181 8.94151 79.4963 9.09308 79.4333 9.27089C79.3615 9.45989 79.326 9.73169 79.326 10.0872V12.1122H78.6564Z"
                                    fill="white"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_160_6134">
                                    <rect width="121" height="36" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <p class="copyright">© 2024 TCC Platform. Todos os direitos reservados.</p>
                <div class="footer-bottom-links">
                    <a href="#" class="footer-bottom-link">Termos de Uso</a>
                    <a href="#" class="footer-bottom-link">Política de Privacidade</a>
                    <a href="#" class="footer-bottom-link">Cookies</a>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal-overlay modal-perfil" id="modalPerfil">
        <div class="register-card">
            <div class="card-content">
                <!-- Formulário de Empresa -->
                <form id="Form" class="register-form active">
                    <div class="image-uploads-section">
                        <div class="banner-upload">
                            <label for="Banner" class="upload-label banner-label">
                                <div class="upload-placeholder" id="BannerPreview">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                        <polyline points="21 15 16 10 5 21"></polyline>
                                    </svg>
                                    <span>Adicionar Foto de Banner</span>
                                </div>
                            </label>
                            <input type="file" id="Banner" accept="image/*" class="file-input">
                        </div>

                        <div class="profile-upload">
                            <label for="Perfil" class="upload-label profile-label">
                                <div class="upload-placeholder circular" id="PerfilPreview">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                            </label>
                            <input type="file" id="Perfil" accept="image/*" class="file-input">
                        </div>
                    </div>

                    <div class="form-fields">
                        <div class="form-group">
                            <label for="Nome" class="form-label">Nome de Perfil</label>
                            <input type="text" id="Nome" class="form-input" placeholder="Digite o nome da empresa"
                                required>
                        </div>

                        <div class="form-group">
                            <div class="searchable-select">
                                <label for="AreaInput" class="form-label">Área/Setor</label>

                                <input type="text" id="AreaInput" class="form-input"
                                    placeholder="Digite para buscar..." autocomplete="off" required>

                                <ul id="AreaOptions" class="options-list hidden">
                                    <li data-value="construcao">Construção Civil</li>
                                    <li data-value="pintura">Pintura</li>
                                    <li data-value="eletrica">Serviços Elétricos</li>
                                    <li data-value="hidraulica">Hidráulica</li>
                                    <li data-value="marcenaria">Marcenaria</li>
                                    <li data-value="jardinagem">Jardinagem</li>
                                    <li data-value="limpeza">Limpeza / Conservação</li>
                                    <li data-value="tecnologia">Tecnologia / Desenvolvimento</li>
                                    <li data-value="outros">Outros</li>
                                </ul>

                                <!-- Campo enviado no form -->
                                <input type="hidden" id="Area" name="Area">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Cep" class="form-label">CEP</label>
                            <input type="text" id="Cep" class="form-input" placeholder="00000-000" required>
                        </div>

                        <div class="form-group">
                            <label for="ProjetosConcluidos" class="form-label">Projetos Concluídos</label>
                            <input type="number" inputmode="numeric" id="ProjetosConcluidos" class="form-input"
                                placeholder="000" required>
                        </div>

                        <div class="form-group">
                            <label for="TempoExpe" class="form-label">Tempo de experiência (em anos)</label>
                            <input type="number" inputmode="numeric" id="TempoExpe" class="form-input"
                                placeholder="00" required>
                        </div>

                        <div class="form-group">
                            <label for="sobreProfissional" class="form-label">Sobre o Profissional</label>
                            <textarea id="sobreProfissional" class="form-textarea"
                                placeholder="Fale um pouco sobre você..." rows="5" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="especialidadeInput" class="form-label">especialidades</label>
                            <div class="especialidades-input-group">
                                <input type="text" class="form-input" placeholder="Digite uma especialidade..."
                                    id="especialidadeInput">
                                <button type="button" class="add-btn" id="addEspecialidadeBtn">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                </button>
                            </div>
                            <div id="especialidadesList" class="especialidades-list"></div>
                        </div>

                        <div class="form-group">
                            <label for="Tel" class="form-label">Telefone</label>
                            <input type="tel" id="Tel" class="form-input" placeholder="(DDD) 00000-0000" required>
                        </div>

                        <div class="form-group">
                            <label for="registerEmail" class="form-label">Email</label>
                            <input type="email" id="registerEmail" class="form-input" placeholder="seu@email.com"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="text" id="instagram" class="form-input" placeholder="@seuusuario">
                        </div>

                        <div class="form-group">
                            <label for="facebook" class="form-label">Facebook</label>
                            <input type="text" id="facebook" class="form-input" placeholder="Link ou usuário">
                        </div>

                        <div class="form-group">
                            <label for="twitter" class="form-label">X (Twitter)</label>
                            <input type="text" id="twitter" class="form-input" placeholder="@seuusuario">
                        </div>

                        <div class="form-actions">
                            <button type="button" id="cancelBtn" class="btn btn-secondary">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Salvar alterações</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal-add-publicacao-overlay" id="modalAddPub">
        <div class="modal-add-publicacao">
            <div class="map-header">
                <h2>Adicionar Nova Publicação</h2>
                <button id="fecharAddPub" class="map-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>

            <div class="map-body">
                <label>Título</label>
                <input type="text" id="pubTitulo" placeholder="Ex: Casa Moderna Finalizada">

                <label>Descrição</label>
                <textarea id="pubDescricao" placeholder="Descreva o projeto..."></textarea>

                <label>Mídias (Fotos e Vídeos)</label>

                <label for="pubMidias" class="btn-upload-midia">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <circle cx="16" cy="8" r="2" stroke="#1C274C" stroke-width="1.5"></circle>
                            <path
                                d="M2 12.5001L3.75159 10.9675C4.66286 10.1702 6.03628 10.2159 6.89249 11.0721L11.1822 15.3618C11.8694 16.0491 12.9512 16.1428 13.7464 15.5839L14.0446 15.3744C15.1888 14.5702 16.7369 14.6634 17.7765 15.599L21 18.5001"
                                stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                            <path
                                d="M22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C21.5093 4.43821 21.8356 5.80655 21.9449 8"
                                stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                        </g>
                    </svg>
                    Adicionar foto/vídeo
                </label>

                <input type="file" id="pubMidias" accept="image/*,video/*" multiple>


                <div id="previewContainer" class="preview-container"></div>
            </div>

            <div class="map-footer">
                <button class="btn-secondary" id="cancelarAddPub">Cancelar</button>
                <button class="adicionar" id="confirmarAddPub">Adicionar</button>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>