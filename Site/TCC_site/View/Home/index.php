<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style7.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <title>Document</title>
</head>
<body>
    <header>
        <div class="nav-container">
            <div class="left-nav-container">
                <div class="lg-div"><img src="public/img/logo.png" alt=""></div>

                <div class="buscador-div">
                    <input class="buscador" id="buscador">
                    <label class="bs-label">Busque por trabalhadores e empresas</label>
                    <label for="buscador" class="bs-svg">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" heigth="px" width="20px" xmlns="http://www.w3.org/2000/svg">
                            <path d="M456.69 421.39 362.6 327.3a173.81 173.81 0 0 0 34.84-104.58C397.44 126.38 319.06 48 222.72 48S48 126.38 48 222.72s78.38 174.72 174.72 174.72A173.81 173.81 0 0 0 327.3 362.6l94.09 94.09a25 25 0 0 0 35.3-35.3zM97.92 222.72a124.8 124.8 0 1 1 124.8 124.8 124.95 124.95 0 0 1-124.8-124.8z"></path>
                        </svg>
                    </label>
                </div>
            </div>
            
            <nav class="right-nav-container">
                <ul class="nav-links">
                    <li><a href="index.php?url=home" class="nav-link">Home</a></li>
                    <li><a href="index.php?url=trabalhadores" class="nav-link">Trabalhadores</a></li>
                    <li><a href="/empresas" class="nav-link">Empresas</a></li>
                    <li><a href="/sobre" class="nav-link">Sobre</a></li>
                </ul>

                <button class="perfil-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="perfil-name"></span>
                </button>

                <button class="favoritos-btn" aria-label="Favoritos">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                      <a href="index.php?url=favoritos">  <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></a>
                    </svg>
                </button>
            </nav>
        </div>
    </header>

    <main class="home-main">
        <section class="hero-section">
            <div class="hero-infor">
                <div class="hero-text">
                    <h1 class="hero-title">
                        Conectando Você ao Seu Futuro
                    </h1>
    
                    <p class="hero-subtitle">
                        Encontre os melhores profissionais ou empresas em todo o Brasil.
                        Uma plataforma confiável para conectar talentos e oportunidades.
                    </p>
                </div>
    
                <div class="hero-buttons">
                    <button class="cta-button primeiro">Comece Agora</button>
                    <button class="cta-button segundo">Saiba Mais</button>
                </div>
            </div>

            <div class="hero-img">
                <img src="public/img/img_home.png">
            </div>
        </section>

        <section class="como_funciona-section">
            <div class="section-text">
                <h2 class="section-title">Conecte-se com oportunidades em 5 passos simples</h2>
                <p class="section-subtitle">Nossa plataforma foi desenvolvida para facilitar a conexão entre profissionais e empresas qualificados e clientes que precisam de seus serviços.</p>
            </div>

            <div class="timeline">
                <div class="timeline-line"></div>

                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="tml_cont-header">
                            <div class="timeline-icon primary">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <h2 class="tml_cont-title">Crie seu perfil</h2>
                        </div>

                        <div class="timeline-text">
                            <p class="tml_cont-subtitle">
                                Profissionais e empresas podem se cadastrar de forma prática, 
                                apresentando seus serviços, qualificações e experiências.
                            </p>
                        </div>
                    </div>

                    <div class="timeline-number">
                        1
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content reverse">
                        <div class="tml_cont-header">
                            <div class="timeline-icon accent">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                            <h2 class="tml_cont-title">Compartilhe seus projetos</h2>
                        </div>

                        <div class="timeline-text">
                            <p class="tml_cont-subtitle">
                                Publique seus trabalhos já realizados ou descreva os serviços que oferece, 
                                facilitando a divulgação para um público mais amplo.
                            </p>
                        </div>
                    </div>

                    <div class="timeline-number reverse">
                        2
                    </div>
                </div>
            
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="tml_cont-header">
                            <div class="timeline-icon primary">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <h2 class="tml_cont-title">Seja encontrado com facilidade</h2>
                        </div>
                        
                        <div class="timeline-text">
                            <p class="tml_cont-subtitle">
                                Clientes em busca de mão de obra qualificada poderão localizar seu perfil diretamente na plataforma, 
                                sem depender de indicações informais.
                            </p>
                        </div>
                    </div>

                    <div class="timeline-number">
                        3
                    </div>
                </div>
            
                <div class="timeline-item">
                    <div class="timeline-content reverse">
                        <div class="tml_cont-header">
                            <div class="timeline-icon accent">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                            </div>
                            <h2 class="tml_cont-title">Receba avaliações</h2>
                        </div>
                        
                        <div class="timeline-text">
                            <p class="tml_cont-subtitle">
                                Após a conclusão de cada serviço, os clientes podem avaliar sua performance com estrelas, 
                                ajudando a destacar sua reputação e credibilidade.
                            </p>
                        </div>
                    </div>

                    <div class="timeline-number">
                        4
                    </div>
                </div>
            
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="tml_cont-header">
                            <div class="timeline-icon primary">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <h2 class="tml_cont-title">Expanda suas oportunidades</h2>
                        </div>
                        
                        <div class="timeline-text">
                            <p class="tml_cont-subtitle">
                                Com maior visibilidade e reconhecimento, você terá mais chances de ser contratado 
                                para novos serviços por pessoas e empresas de diferentes portes.
                            </p>
                        </div>
                    </div>

                    <div class="timeline-number">
                        5
                    </div>
                </div>
            </div>   

            <div class="cta_timeline-container">
                <h3 class="cta_tml_cont-title">Oportunidades esperam por você</h3>
                <p class="cta_tml_cont-subtitle">Junte-se à nossa plataforma e transforme a forma de contratar e oferecer serviços em todo o Brasil</p>
                <button class="cta_tml-button">Comece agora mesmo</button>
            </div>

        </section>

        <section class="servicos_destaque-section">
            <div class="section-text">
                <h2 class="section-title se">Serviços em Destaque</h2>
                <p class="section-subtitle se">
                    Encontre profissionais qualificados nas principais áreas da construção civil
                </p>
            </div>

            <div class="sv_des-cards_home">
                <div class="sv_des-card">
                    <div class="servico-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                            <path d="M3 21h18"/>
                            <path d="M5 21V7l8-4v18"/>
                            <path d="M19 21V11l-6-4"/>
                        </svg>
                    </div>
    
                    <div class="sv_des-card-text">
                        <h3 class="sv_des-card-title">Pedreiros</h3>
                        <p class="sv_des-card-subtitle">
                            rofissionais especializados em alvenaria, fundações e estruturas de concreto.
                        </p>
                    </div>
    
                    <button class="sv_des-card-button">Saiba Mais</button>
                </div>
    
                <div class="sv_des-card">
                    <div class="servico-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" class="bi bi-lightning-charge-fill" viewBox="0 0 16 16">
                            <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
                        </svg>
                    </div>
    
                    <div class="sv_des-card-text">
                        <h3 class="sv_des-card-title">Eletricistas</h3>
                        <p class="sv_des-card-subtitle">
                            Especialistas em instalações elétricas residenciais, comerciais e industriais.
                        </p>
                    </div>
                    
                    <button class="sv_des-card-button">Saiba Mais</button>
                </div>
    
                <div class="sv_des-card">
                    <div class="servico-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 4.5C6 3.56538 6 3.09808 6.20096 2.75C6.33261 2.52197 6.52197 2.33261 6.75 2.20096C7.09808 2 7.56538 2 8.5 2H15.5C16.4346 2 16.9019 2 17.25 2.20096C17.478 2.33261 17.6674 2.52197 17.799 2.75C18 3.09808 18 3.56538 18 4.5C18 5.43462 18 5.90192 17.799 6.25C17.6674 6.47803 17.478 6.66739 17.25 6.79904C16.9019 7 16.4346 7 15.5 7H8.5C7.56538 7 7.09808 7 6.75 6.79904C6.52197 6.66739 6.33261 6.47803 6.20096 6.25C6 5.90192 6 5.43462 6 4.5Z" fill="#fff"></path> <path d="M5.00214 3.93909C4.84746 4.07647 4.75 4.27687 4.75 4.50002C4.75 4.72318 4.84746 4.92357 5.00214 5.06095C4.99998 4.89619 4.99999 4.72205 5 4.54025V4.4598C4.99999 4.278 4.99998 4.10385 5.00214 3.93909Z" fill="#fff"></path> <path d="M10 16V20C10 20.9428 10 21.4142 10.2929 21.7071C10.5858 22 11.0572 22 12 22C12.9428 22 13.4142 22 13.7071 21.7071C14 21.4142 14 20.9428 14 20V16C14 15.0572 14 14.5858 13.7071 14.2929C13.4142 14 12.9428 14 12 14C11.0572 14 10.5858 14 10.2929 14.2929C10 14.5858 10 15.0572 10 16Z" fill="#fff"></path> <path d="M18.9944 5.25H19.0453C19.4999 5.25 19.8051 5.25037 20.0416 5.26579C20.2718 5.2808 20.3843 5.30776 20.4583 5.3369C20.781 5.46395 21.0364 5.71937 21.1635 6.04208C21.1926 6.11609 21.2196 6.22858 21.2346 6.45878C21.25 6.6953 21.2504 7.00044 21.2504 7.4551C21.2504 8.29243 21.2398 8.52185 21.179 8.69392C21.0747 8.98918 20.8634 9.23455 20.5869 9.38148C20.4257 9.4671 20.2004 9.5116 19.3724 9.63581L15.249 10.2543C14.4763 10.3702 13.8277 10.4675 13.3152 10.6116C12.7721 10.7643 12.2916 10.9923 11.9166 11.4278C11.5334 11.8727 11.3753 12.4055 11.3071 13.0062C11.5113 12.9999 11.727 13 11.9458 13H12.0546C12.3196 13 12.5799 12.9999 12.8208 13.011C12.8708 12.6902 12.9482 12.5286 13.0532 12.4067C13.1626 12.2796 13.3307 12.1654 13.7212 12.0556C14.1321 11.94 14.6865 11.8555 15.5182 11.7307L19.714 11.1014C20.3648 11.0044 20.8716 10.9288 21.2907 10.7061C21.8991 10.3829 22.3639 9.84304 22.5934 9.19346C22.7514 8.74599 22.751 8.23353 22.7504 7.57559L22.7504 7.43098C22.7504 7.00661 22.7504 6.65233 22.7314 6.3612C22.7116 6.05823 22.6691 5.77171 22.5592 5.49258C22.2797 4.78261 21.7177 4.22069 21.0078 3.94117C20.7286 3.83128 20.4421 3.78872 20.1392 3.76897C19.848 3.74999 19.4937 3.74999 19.0694 3.75H18.9944C19.0002 3.96867 19.0002 4.20681 19.0002 4.45976V4.54024C19.0002 4.7932 19.0002 5.03133 18.9944 5.25Z" fill="#fff"></path> </g></svg>
                    </div>
    
                    <div class="sv_des-card-text">
                        <h3 class="sv_des-card-title">Pintores</h3>
                        <p class="sv_des-card-subtitle">
                            Profissionais em pintura residencial, comercial e acabamentos especiais.
                        </p>
                    </div>
                    
    
                    <button class="sv_des-card-button">Saiba Mais</button>
                </div>
            </div>
            <svg class="soft-wave-divider" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,80 C300,120 900,40 1200,80 L1200,120 L0,120 Z" fill="#2563eb"></path>
            </svg>
        </section>

        <section class="motivos_escolhas-section">
            <div class="section-text">
                <h2 class="section-title">Por que profissionais e empresas escolhem nossa plataforma</h2>
                <p class="section-subtitle">Conectamos trabalhadores qualificados e empresas a clientes de forma ágil, confiável e eficiente.</p>
            </div>

            <div class="mt_es-cards_home">
                <div class="mt_es-card">
                    <div class="mt_es-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 3C12 7.97056 16.0294 12 21 12C16.0294 12 12 16.0294 12 21C12 16.0294 7.97056 12 3 12C7.97056 12 12 7.97056 12 3Z" stroke="#fbfbffea" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </div>
                    <div class="mt_es-card-text">
                        <h3 class="mt_es-card-title">Agilidade e praticidade</h3>
                        <p class="mt_es-card-subtitle">Contato rápido entre clientes e profissionais, sem burocracia desnecessária.</p>
                    </div>
                </div>

                <div class="mt_es-card">
                    <div class="mt_es-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1L3 5V11C3 16.55 6.84 21.74 12 23C17.16 21.74 21 16.55 21 11V5L12 1ZM10 17L6 13L7.41 11.59L10 14.17L16.59 7.58L18 9L10 17Z" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="mt_es-card-text">
                        <h3 class="mt_es-card-title">Qualidade e confiabilidade</h3>
                        <p class="mt_es-card-subtitle">Perfis cuidadosamente avaliados por clientes anteriores para garantir excelência.</p>
                    </div>
                </div>

                <div class="mt_es-card">
                    <div class="mt_es-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12S6.48 22 12 22 22 17.52 22 12 17.52 2 12 2ZM12 6C15.31 6 18 8.69 18 12S15.31 18 12 18 6 15.31 6 12 8.69 6 12 6ZM12 8C9.79 8 8 9.79 8 12S9.79 16 12 16 16 14.21 16 12 14.21 8 12 8Z" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="mt_es-card-text">
                        <h3 class="mt_es-card-tile">Maior visibilidade</h3>
                        <p class="mt_es-card-subtitle">Exponha seus serviços a milhares de clientes potenciais em todo o país.</p>
                    </div>
                </div>

                <div class="mt_es-linha"></div>

                <div class="mt_es-card">
                    <div class="mt_es-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L2 7L12 12L22 7L12 2ZM2 17L12 22L22 17M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="mt_es-card-text">
                        <h3 class="mt_es-card-title">Flexibilidade para qualquer projeto</h3>
                        <p class="mt_es-card-subtitle">De pequenos serviços domésticos a grandes empreendimentos corporativos.</p>
                    </div>
                </div>

                <div class="mt_es-card">
                    <div class="mt_es-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="mt_es-card-text">
                        <h3 class="mt_es-card-title">Credibilidade consolidada</h3>
                        <p class="mt_es-card-subtitle">Construa uma reputação sólida baseada em confiança e resultados comprovados.</p>
                    </div>
                </div>

                <div class="mt_es-card">
                    <div class="mt_es-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM19 19H5V5H19V19ZM7 10H9V12H7V10ZM11 10H17V12H11V10ZM7 14H9V16H7V14ZM11 14H17V16H11V14Z" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="mt_es-card-text">
                        <h3 class="mt_es-card-title">Interface intuitiva</h3>
                        <p class="mt_es-card-subtitle">Plataforma simples, prática e acessível para todos os níveis de usuário.</p>
                    </div>
                </div>
            </div>

            <svg class="soft-wave-divider bottom" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,80 C300,120 900,40 1200,80 L1200,120 L0,120 Z" fill="#2563eb"></path>
            </svg>
        </section>

        <section class="cta-section">
            <div class="section-text">
                <h2 class="section-title se">Pronto para começar?</h2>
                <p class="section-subtitle se">Conecte-se com quem precisa do seu trabalho e com quem pode realizá-lo.</p>
            </div>

            <div class="cta-buttons">
                <button class="cta_section-button pri">Contratar para Meu Projeto</button>
                <button class="cta_section-button sec">Oferecer Meus Serviços</button>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section pri">
                <div class="ft-logo">
                    <img src="public/img/logo.png" alt="logo OPI">
                    <h3 class="footer-title-logo">TCC Plataforma</h3>
                </div>

                <p class="footer-subtitle">Profissionais divulgam seus serviços e clientes encontram mão de obra qualificada com facilidade e confiança.</p>
                
                <div class="social-links">
                    <a href="#" class="social-link">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0,0,256,256">
                            <g fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M11,4c-3.866,0 -7,3.134 -7,7v28c0,3.866 3.134,7 7,7h28c3.866,0 7,-3.134 7,-7v-28c0,-3.866 -3.134,-7 -7,-7zM13.08594,13h7.9375l5.63672,8.00977l6.83984,-8.00977h2.5l-8.21094,9.61328l10.125,14.38672h-7.93555l-6.54102,-9.29297l-7.9375,9.29297h-2.5l9.30859,-10.89648zM16.91406,15l14.10742,20h3.06445l-14.10742,-20z"></path></g></g>
                        </svg>
                    </a>

                    <a href="#" class="social-link">
                        <svg viewBox="0 0 32 32" id="Camada_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#2e2d37;} </style> <path d="M6,2h20c2.2,0,4,1.8,4,4v20c0,2.2-1.8,4-4,4H6c-2.2,0-4-1.8-4-4V6C2,3.8,3.8,2,6,2z"></path> <g> <path class="st0" d="M21.3,9.7c-0.6,0-1.2,0.5-1.2,1.2c0,0.7,0.5,1.2,1.2,1.2c0.7,0,1.2-0.5,1.2-1.2C22.4,10.2,21.9,9.7,21.3,9.7z"></path> <path class="st0" d="M16,11.2c-2.7,0-4.9,2.2-4.9,4.9c0,2.7,2.2,4.9,4.9,4.9s4.9-2.2,4.9-4.9C21,13.4,18.8,11.2,16,11.2z M16,19.3 c-1.7,0-3.2-1.4-3.2-3.2c0-1.7,1.4-3.2,3.2-3.2c1.7,0,3.2,1.4,3.2,3.2C19.2,17.9,17.8,19.3,16,19.3z"></path> <path class="st0" d="M20,6h-8c-3.3,0-6,2.7-6,6v8c0,3.3,2.7,6,6,6h8c3.3,0,6-2.7,6-6v-8C26,8.7,23.3,6,20,6z M24.1,20 c0,2.3-1.9,4.1-4.1,4.1h-8c-2.3,0-4.1-1.9-4.1-4.1v-8c0-2.3,1.9-4.1,4.1-4.1h8c2.3,0,4.1,1.9,4.1,4.1V20z"></path> </g> </g>
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
                    <a href="#" class="google-play"><svg width="119" height="36" viewBox="0 0 119 36" fill="none" role="img"><g clip-path="url(#clip0_160_6133)"><path d="M0.447388 6.3C0.447388 4.62914 1.10725 3.02671 2.28182 1.84523C3.45639 0.663748 5.04945 0 6.71055 0L112.289 0C113.951 0 115.544 0.663748 116.718 1.84523C117.893 3.02671 118.553 4.62914 118.553 6.3V28.8378C118.553 30.5087 117.893 32.1111 116.718 33.2926C115.544 34.4741 113.951 35.1378 112.289 35.1378H6.71055C5.04945 35.1378 3.45639 34.4741 2.28182 33.2926C1.10725 32.1111 0.447388 30.5087 0.447388 28.8378V6.3Z" fill="black"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M112.289 0.63H6.71055C5.21556 0.63 3.78181 1.22737 2.7247 2.2907C1.66758 3.35404 1.0737 4.79622 1.0737 6.3V28.8378C1.0737 30.3416 1.66758 31.7838 2.7247 32.8471C3.78181 33.9104 5.21556 34.5078 6.71055 34.5078H112.289C113.784 34.5078 115.218 33.9104 116.275 32.8471C117.332 31.7838 117.926 30.3416 117.926 28.8378V6.3C117.926 4.79622 117.332 3.35404 116.275 2.2907C115.218 1.22737 113.784 0.63 112.289 0.63ZM6.71055 0C5.04945 0 3.45639 0.663748 2.28182 1.84523C1.10725 3.02671 0.447388 4.62914 0.447388 6.3V28.8378C0.447388 30.5087 1.10725 32.1111 2.28182 33.2926C3.45639 34.4741 5.04945 35.1378 6.71055 35.1378H112.289C113.951 35.1378 115.544 34.4741 116.718 33.2926C117.893 32.1111 118.553 30.5087 118.553 28.8378V6.3C118.553 4.62914 117.893 3.02671 116.718 1.84523C115.544 0.663748 113.951 0 112.289 0H6.71055Z" fill="black"></path><path d="M60.1657 19.1583C58.0863 19.1583 56.4221 20.7486 56.4221 22.923C56.42 23.4181 56.5153 23.9087 56.7027 24.3665C56.8901 24.8244 57.1658 25.2403 57.5138 25.5904C57.8619 25.9405 58.2754 26.2178 58.7306 26.4063C59.1857 26.5948 59.6735 26.6907 60.1657 26.6886C62.245 26.6886 63.9084 25.0983 63.9084 22.923C63.9084 20.664 62.1618 19.1583 60.1657 19.1583ZM60.1657 25.0983C59.0839 25.0983 58.0863 24.1785 58.0863 22.8393C58.0863 21.501 59.0839 20.5803 60.1657 20.5803C61.2465 20.5803 62.245 21.501 62.245 22.8393C62.3283 24.1785 61.2465 25.0983 60.1657 25.0983ZM52.0978 19.1583C50.0185 19.1583 48.3551 20.7486 48.3551 22.923C48.353 23.418 48.4484 23.9085 48.6357 24.3663C48.823 24.8241 49.0986 25.24 49.4466 25.5901C49.7945 25.9402 50.2079 26.2175 50.663 26.406C51.118 26.5946 51.6057 26.6906 52.0978 26.6886C54.1772 26.6886 55.8405 25.0983 55.8405 22.923C55.7573 20.664 54.094 19.1583 52.0978 19.1583ZM52.0978 25.0983C51.0161 25.0983 50.0185 24.1785 50.0185 22.8393C50.0185 21.501 51.0161 20.5803 52.0978 20.5803C53.1787 20.5803 54.1772 21.501 54.1772 22.8393C54.1772 24.1785 53.1787 25.0983 52.0978 25.0983ZM42.3658 20.2464V21.8358H46.1917C46.1085 22.7565 45.7756 23.3415 45.2764 23.8428C44.7771 24.3459 43.8627 25.0146 42.3658 25.0146C40.0368 25.0146 38.2903 23.0904 38.2903 20.7486C38.2903 18.4059 40.12 16.4817 42.3658 16.4817C43.6963 16.4817 44.6116 16.983 45.1931 17.5689L46.2749 16.4817C45.3596 15.7284 44.0291 14.9751 42.1994 14.9751C41.4335 14.9703 40.6743 15.1185 39.9657 15.4111C39.2572 15.7037 38.6135 16.1349 38.072 16.6797C37.5304 17.2244 37.1017 17.8719 36.8108 18.5846C36.5199 19.2973 36.3726 20.061 36.3773 20.8314C36.3773 24.0948 39.1215 26.6886 42.1994 26.6886C43.8627 26.6886 45.1931 26.1027 46.1917 25.0983C47.1893 24.0948 47.6054 22.5891 47.6054 21.3336C47.6054 20.9151 47.6054 20.664 47.5221 20.3301L42.3658 20.2464ZM81.9561 21.501C81.6233 20.664 80.7911 19.1583 78.8782 19.1583C76.9653 19.1583 75.3851 20.6649 75.3851 22.923C75.3851 25.0146 76.9653 26.6886 79.1278 26.6886C80.792 26.6886 81.8729 25.6842 82.2057 25.0983L80.8744 24.2613C80.4583 24.8472 79.8767 25.2657 79.0446 25.2657C78.2125 25.2657 77.6309 24.8472 77.2149 24.1785L82.2048 22.0869L81.9561 21.5019V21.501ZM76.9653 22.7565C76.9653 21.3345 78.047 20.4975 78.8782 20.4975C79.4598 20.4975 80.0423 20.8314 80.2919 21.3345L76.9653 22.7565ZM72.8065 26.4375H74.3866V15.3945H72.8065V26.4375ZM70.2279 19.9953C69.9675 19.7292 69.6568 19.518 69.3142 19.3743C68.9716 19.2306 68.6039 19.1571 68.2326 19.1583C66.3197 19.1583 64.6555 20.7486 64.6555 22.923C64.6555 25.0146 66.3197 26.6886 68.2317 26.6886C68.6031 26.6898 68.971 26.6164 69.3138 26.4727C69.6566 26.3289 69.9674 26.1178 70.2279 25.8516H70.312V26.3538C70.312 27.7758 69.4799 28.6128 68.3158 28.6128C67.3173 28.6128 66.7348 27.9432 66.4029 27.2736L64.9892 27.8586C65.4044 28.863 66.4852 30.1176 68.3158 30.1176C70.2288 30.1176 71.8089 29.0304 71.8089 26.1864V19.4094H70.312L70.2288 19.9944L70.2279 19.9953ZM68.3149 25.0983C67.2341 25.0983 66.2365 24.1785 66.2365 22.8393C66.2365 21.501 67.1509 20.4975 68.3149 20.4975C69.3967 20.4975 70.312 21.501 70.312 22.8393C70.312 24.1785 69.3958 25.0983 68.3149 25.0983ZM89.6911 15.3936H85.7811V26.4366H87.3621V22.1706H89.6911C91.5208 22.1706 93.2674 20.8314 93.2674 18.7407C93.2674 16.6491 91.4376 15.3936 89.6911 15.3936ZM89.6911 20.6649H87.3621V16.8993H89.6911C90.8551 16.8993 91.604 17.9037 91.604 18.8244C91.5208 19.6605 90.8551 20.664 89.6911 20.664V20.6649ZM99.7551 19.1583C98.5901 19.1583 97.3429 19.6605 96.8436 20.9151L98.2573 21.501C98.5901 20.916 99.1726 20.664 99.7551 20.664C100.586 20.664 101.418 21.1662 101.418 22.086V22.1706C101.086 22.0032 100.503 21.7521 99.7551 21.7521C98.1741 21.7521 96.6772 22.6728 96.6772 24.2622C96.6772 25.7679 98.0077 26.6886 99.4223 26.6886C100.503 26.6886 101.086 26.1864 101.502 25.6005H101.585V26.4375H103.165V22.1706C103.082 20.1627 101.585 19.1583 99.7551 19.1583ZM99.5887 25.0983C99.0894 25.0983 98.2573 24.7635 98.2573 24.1785C98.2573 23.3415 99.1726 23.0067 99.9206 23.0067C100.586 23.0067 101.002 23.1741 101.418 23.4252C101.418 24.4296 100.503 25.0983 99.5887 25.0983ZM108.821 19.3257L106.908 24.0948H106.824L104.911 19.3257H103.082L105.992 26.019L104.329 29.7837H105.992L110.484 19.4094H108.821V19.3257ZM94.1818 26.4375H95.7628V15.3945H94.1818V26.4375ZM36.7889 12.5496V7.15946H38.6347C39.0517 7.15946 39.3693 7.18556 39.5885 7.23686C39.8954 7.30796 40.1576 7.43666 40.375 7.62296C40.6577 7.86326 40.868 8.17016 41.0067 8.54546C41.148 8.91806 41.2187 9.34466 41.2187 9.82526C41.2187 10.2339 41.1713 10.5975 41.0765 10.9134C40.9983 11.1938 40.8749 11.4596 40.7114 11.7C40.5779 11.8906 40.4119 12.0561 40.2211 12.1887C40.0457 12.3066 39.8328 12.3957 39.5814 12.4578C39.2997 12.5227 39.0113 12.5535 38.7224 12.5496H36.7889ZM37.4984 11.9133H38.6419C38.9953 11.9133 39.2718 11.88 39.4722 11.8143C39.6744 11.7477 39.8346 11.655 39.9545 11.5353C40.1365 11.3424 40.2705 11.1089 40.3455 10.854C40.4403 10.5678 40.4886 10.2204 40.4886 9.81446C40.4886 9.25016 40.3956 8.81726 40.2104 8.51576C40.0269 8.21246 39.8042 8.00906 39.5411 7.90556C39.3514 7.83266 39.0454 7.79576 38.624 7.79576H37.4984V11.9133ZM42.1179 7.91996V7.15946H42.7765V7.92086L42.1179 7.91996ZM42.1179 12.5496V8.64446H42.7765V12.5496H42.1179ZM43.5182 11.3841L44.1687 11.2806C44.2045 11.5434 44.3065 11.7441 44.472 11.8836C44.6402 12.024 44.8746 12.0933 45.1735 12.0933C45.4759 12.0933 45.7005 12.0321 45.8463 11.9097C45.9922 11.7846 46.0655 11.6388 46.0655 11.4723C46.067 11.4016 46.0499 11.3317 46.0159 11.2698C45.982 11.2078 45.9325 11.156 45.8723 11.1195C45.7819 11.0601 45.5573 10.9854 45.1994 10.8945C44.7163 10.7721 44.3816 10.6668 44.1946 10.5795C44.0209 10.4988 43.8737 10.3698 43.7705 10.2078C43.6754 10.0489 43.6258 9.86669 43.6274 9.68126C43.6274 9.50756 43.6667 9.34736 43.7446 9.19976C43.8251 9.05036 43.9334 8.92706 44.0703 8.82896C44.1723 8.75246 44.3118 8.68856 44.4863 8.63726C44.6653 8.58326 44.8549 8.55626 45.0572 8.55626C45.3614 8.55626 45.628 8.60126 45.857 8.68856C46.0888 8.77676 46.2597 8.89736 46.3688 9.04856C46.4789 9.19886 46.554 9.39956 46.5952 9.65156L45.9519 9.74066C45.9318 9.5561 45.8402 9.38695 45.6969 9.26996C45.5573 9.15746 45.3605 9.10076 45.1046 9.10076C44.8021 9.10076 44.5865 9.15116 44.4577 9.25106C44.3279 9.35186 44.2635 9.46976 44.2635 9.60476C44.2635 9.69026 44.2904 9.76676 44.344 9.83606C44.3977 9.90716 44.4818 9.96566 44.5964 10.0125C44.6617 10.0368 44.8558 10.0935 45.1779 10.1817C45.6432 10.3068 45.9671 10.4094 46.1496 10.4904C46.3348 10.5687 46.4798 10.6839 46.5845 10.836C46.6891 10.9881 46.7419 11.1771 46.7419 11.403C46.7419 11.6226 46.6775 11.8314 46.5478 12.0276C46.4114 12.229 46.2196 12.3861 45.9957 12.4794C45.7542 12.5847 45.4822 12.6378 45.177 12.6378C44.6733 12.6378 44.2877 12.5325 44.0228 12.3219C43.7589 12.1104 43.5907 11.7981 43.5182 11.3841ZM47.5239 14.0454V8.64536H48.1234V9.15206C48.2648 8.95406 48.424 8.80556 48.6021 8.70746C48.7801 8.60666 48.9958 8.55626 49.249 8.55626C49.58 8.55626 49.8726 8.64266 50.1258 8.81366C50.3799 8.98556 50.5714 9.22766 50.7003 9.54266C50.8291 9.85316 50.8935 10.1952 50.8935 10.5678C50.8935 10.9674 50.8219 11.3274 50.6788 11.6478C50.5365 11.9673 50.3298 12.2121 50.0569 12.384C49.7867 12.5532 49.5013 12.6378 49.2016 12.6378C48.9824 12.6378 48.7846 12.591 48.6093 12.4983C48.4439 12.4114 48.2983 12.2909 48.1816 12.1446V14.0454H47.5239ZM48.1198 10.6191C48.1198 11.1213 48.2209 11.493 48.4231 11.7333C48.6254 11.9736 48.8705 12.0933 49.1577 12.0933C49.4503 12.0933 49.6999 11.97 49.9066 11.7225C50.1169 11.4723 50.2216 11.0862 50.2216 10.5642C50.2216 10.0665 50.1187 9.69386 49.9147 9.44636C49.7125 9.19886 49.47 9.07466 49.1873 9.07466C48.9072 9.07466 48.6585 9.20696 48.441 9.47156C48.2263 9.73436 48.1198 10.1169 48.1198 10.6191ZM51.4456 10.5975C51.4456 9.87386 51.646 9.33836 52.045 8.99006C52.3788 8.70116 52.7859 8.55626 53.2664 8.55626C53.7996 8.55626 54.2363 8.73266 54.5745 9.08636C54.9136 9.43736 55.0827 9.92156 55.0827 10.5417C55.0827 11.0448 55.0066 11.4399 54.8563 11.7297C54.7078 12.0159 54.4895 12.2391 54.2014 12.3984C53.9155 12.558 53.5933 12.6405 53.2664 12.6378C52.7224 12.6378 52.2821 12.4623 51.9466 12.1122C51.6129 11.7612 51.4456 11.2572 51.4456 10.5975ZM52.122 10.5975C52.122 11.097 52.2303 11.4723 52.4477 11.7225C52.6642 11.97 52.9371 12.0933 53.2664 12.0933C53.5929 12.0933 53.864 11.9682 54.0806 11.7189C54.298 11.4687 54.4063 11.0871 54.4063 10.5759C54.4063 10.0926 54.2971 9.72716 54.0779 9.47966C53.9791 9.36004 53.855 9.26422 53.7145 9.19927C53.5741 9.13431 53.4209 9.10188 53.2664 9.10436C52.9371 9.10436 52.6642 9.22856 52.4477 9.47606C52.2303 9.72356 52.122 10.0971 52.122 10.5975ZM55.8575 12.5496V8.64446H56.4498V9.19976C56.7344 8.77136 57.1468 8.55626 57.6846 8.55626C57.919 8.55626 58.1337 8.59946 58.3288 8.68496C58.5256 8.76866 58.6733 8.87846 58.7708 9.01616C58.8683 9.15296 58.9363 9.31676 58.9748 9.50486C58.9998 9.62726 59.0115 9.84236 59.0115 10.1484V12.5496H58.3538V10.1736C58.3538 9.90446 58.3279 9.70376 58.2769 9.57056C58.2252 9.43535 58.1284 9.3224 58.0031 9.25106C57.8654 9.16822 57.7072 9.12639 57.5468 9.13046C57.2658 9.13046 57.0234 9.21956 56.8185 9.39866C56.6163 9.57776 56.5152 9.91706 56.5152 10.4166V12.5496H55.8575ZM60.2543 12.5496V8.64446H60.9128V12.5496H60.2543ZM60.2211 8.15936L60.7079 7.12976H61.5704L60.766 8.15936H60.2211ZM63.1863 12.5496L61.71 8.64446H62.4034L63.2373 10.9827C63.3268 11.2356 63.41 11.4975 63.4852 11.7702C63.5442 11.5632 63.6256 11.3166 63.7303 11.0277L64.5928 8.64446H65.2693L63.8001 12.5496H63.1863ZM68.5073 11.2923L69.1873 11.3769C69.0799 11.7765 68.8813 12.0861 68.5914 12.3066C68.3015 12.5271 67.9311 12.6378 67.4801 12.6378C66.9129 12.6378 66.4619 12.4623 66.1282 12.1122C65.7971 11.7585 65.6307 11.2653 65.6307 10.6299C65.6307 9.97286 65.7989 9.46346 66.1354 9.10076C66.4718 8.73806 66.9075 8.55626 67.4444 8.55626C67.9633 8.55626 68.3865 8.73446 68.7158 9.08996C69.045 9.44546 69.2097 9.94496 69.2097 10.5894L69.2061 10.7667H66.3107C66.3349 11.1951 66.4557 11.5236 66.6731 11.7513C66.8896 11.9799 67.1598 12.0933 67.4846 12.0933C67.7262 12.0933 67.932 12.0303 68.102 11.9025C68.272 11.7747 68.408 11.5713 68.5073 11.2923ZM66.3474 10.2213H68.5145C68.4858 9.89366 68.4026 9.64706 68.2666 9.48326C68.1695 9.3604 68.0453 9.26191 67.9038 9.19553C67.7624 9.12916 67.6075 9.09672 67.4515 9.10076C67.1491 9.10076 66.8941 9.20246 66.6874 9.40586C66.4825 9.60926 66.3698 9.88016 66.3474 10.2213ZM70.0024 12.5496V7.15946H70.66V12.5496H70.0024ZM76.4239 11.2923L77.1039 11.3769C76.9966 11.7765 76.7988 12.0861 76.5089 12.3066C76.2182 12.5271 75.8477 12.6378 75.3977 12.6378C74.8295 12.6378 74.3786 12.4623 74.0448 12.1122C73.7138 11.7585 73.5483 11.2653 73.5483 10.6299C73.5483 9.97286 73.7165 9.46346 74.052 9.10076C74.3884 8.73806 74.825 8.55626 75.361 8.55626C75.8799 8.55626 76.304 8.73446 76.6324 9.08996C76.9617 9.44546 77.1263 9.94496 77.1263 10.5894L77.1227 10.7667H74.2274C74.2524 11.1951 74.3732 11.5236 74.5897 11.7513C74.8063 11.9799 75.0765 12.0933 75.4013 12.0933C75.6428 12.0933 75.8486 12.0303 76.0186 11.9025C76.1886 11.7747 76.3246 11.5713 76.4239 11.2923ZM74.264 10.2213H76.432C76.4025 9.89366 76.3193 9.64706 76.1833 9.48326C76.0861 9.3604 75.9619 9.26191 75.8204 9.19553C75.679 9.12916 75.5242 9.09672 75.3681 9.10076C75.0657 9.10076 74.8116 9.20246 74.604 9.40586C74.3991 9.60926 74.2864 9.88016 74.264 10.2213ZM77.9343 12.5496V8.64446H78.5221V9.19346C78.6438 9.00176 78.8066 8.84786 79.0088 8.73266C79.211 8.61566 79.441 8.55626 79.6996 8.55626C79.9868 8.55626 80.2221 8.61656 80.4046 8.73626C80.5898 8.85686 80.7205 9.02426 80.7956 9.24026C81.1025 8.78486 81.5025 8.55626 81.9946 8.55626C82.3793 8.55626 82.6755 8.66426 82.883 8.88026C83.0897 9.09356 83.1935 9.42296 83.1935 9.86936V12.5496H82.5395V10.089C82.5395 9.82436 82.5171 9.63446 82.4733 9.51926C82.4315 9.40087 82.3502 9.3007 82.2433 9.23576C82.1246 9.16304 81.9877 9.12618 81.8487 9.12956C81.5758 9.12956 81.3495 9.22136 81.1687 9.40496C80.988 9.58586 80.8985 9.87836 80.8985 10.2798V12.5478H80.24V10.0116C80.24 9.71726 80.1863 9.49676 80.0789 9.35006C79.9716 9.20246 79.7971 9.12956 79.5528 9.12956C79.3707 9.12864 79.1921 9.17949 79.0375 9.27626C78.8792 9.37708 78.7594 9.52865 78.6975 9.70646C78.6268 9.89546 78.5919 10.1673 78.5919 10.5228V12.5478H77.9343V12.5496Z" fill="white"></path><path d="M9.67926 6.69336C9.51284 6.85986 9.2641 7.36206 9.2641 7.86336V27.2737C9.2641 27.7759 9.42963 28.2781 9.67926 28.4455L9.76247 28.5283L20.5754 17.6527V17.4853L9.67926 6.69336Z" fill="url(#paint0_linear_160_6133)"></path><path d="M24.2348 21.3336L20.6586 17.7363V17.5689L24.2348 13.9716H24.318L28.6432 16.398C29.8073 17.0667 29.8073 18.2385 28.6432 18.9072L24.2348 21.3336Z" fill="url(#paint1_linear_160_6133)"></path><path d="M24.318 21.2499L20.5754 17.4852L9.67926 28.4454C10.0953 28.8639 10.761 28.9467 11.509 28.5291L24.3189 21.249L24.318 21.2499Z" fill="url(#paint2_linear_160_6133)"></path><path d="M24.318 13.887L11.509 6.52504C10.8442 6.10744 10.0953 6.10744 9.67926 6.60964L20.5754 17.568L24.318 13.887Z" fill="url(#paint3_linear_160_6133)"></path><path opacity="0.2" d="M24.2348 21.2499L11.5099 28.53C10.8442 28.9476 10.1785 28.9476 9.84566 28.53L9.76245 28.6137L9.84566 28.6974C10.2617 29.115 10.8442 29.115 11.5099 28.6974L24.2348 21.2499Z" fill="black"></path><path opacity="0.12" d="M9.67926 28.4453C9.51284 28.1105 9.2641 27.7757 9.2641 27.2735V27.3572C9.2641 27.8594 9.42963 28.3616 9.67926 28.529V28.4453ZM28.6432 18.7406L24.2348 21.2498L24.318 21.3335L28.6432 18.908C29.2248 18.5732 29.5576 18.071 29.5576 17.5688C29.4744 18.071 29.1416 18.4058 28.6432 18.7406Z" fill="black"></path><path opacity="0.25" d="M11.509 6.77703L28.56 16.5654C29.1416 16.9002 29.4744 17.2341 29.4744 17.6526C29.4744 17.1504 29.1416 16.7328 28.56 16.3143L11.509 6.52503C10.3449 5.85543 9.3464 6.44133 9.3464 7.86333V7.94703C9.26408 6.52503 10.3449 6.02283 11.509 6.77613V6.77703Z" fill="white"></path></g><defs><linearGradient id="paint0_linear_160_6133" x1="19.669" y1="7.66536" x2="4.91195" y2="22.3361" gradientUnits="userSpaceOnUse"><stop stop-color="#00A0FF"></stop><stop offset="0.007" stop-color="#00A1FF"></stop><stop offset="0.26" stop-color="#00BEFF"></stop><stop offset="0.512" stop-color="#00D2FF"></stop><stop offset="0.76" stop-color="#00DFFF"></stop><stop offset="1" stop-color="#00E3FF"></stop></linearGradient><linearGradient id="paint1_linear_160_6133" x1="30.1893" y1="17.64" x2="9.03862" y2="17.64" gradientUnits="userSpaceOnUse"><stop stop-color="#FFE000"></stop><stop offset="0.409" stop-color="#FFBD00"></stop><stop offset="0.775" stop-color="#FFA500"></stop><stop offset="1" stop-color="#FF9C00"></stop></linearGradient><linearGradient id="paint2_linear_160_6133" x1="22.2897" y1="19.5876" x2="2.27942" y2="39.4809" gradientUnits="userSpaceOnUse"><stop stop-color="#FF3A44"></stop><stop offset="1" stop-color="#C31162"></stop></linearGradient><linearGradient id="paint3_linear_160_6133" x1="6.97358" y1="0.183635" x2="15.9086" y2="9.06733" gradientUnits="userSpaceOnUse"><stop stop-color="#32A071"></stop><stop offset="0.069" stop-color="#2DA771"></stop><stop offset="0.476" stop-color="#15CF74"></stop><stop offset="0.801" stop-color="#06E775"></stop><stop offset="1" stop-color="#00F076"></stop></linearGradient><clipPath id="clip0_160_6133"><rect width="119" height="36" fill="white"></rect></clipPath></defs></svg>
                    </a>

                    <a href="#" class="app-store"><svg width="121" height="36" viewBox="0 0 121 36" fill="none" role="img"><g clip-path="url(#clip0_160_6134)"><path d="M0.454895 6.3C0.454895 4.62914 1.12585 3.02671 2.32016 1.84523C3.51447 0.663748 5.13431 0 6.82332 0L114.177 0C115.866 0 117.486 0.663748 118.68 1.84523C119.874 3.02671 120.545 4.62914 120.545 6.3V28.8378C120.545 30.5087 119.874 32.1111 118.68 33.2926C117.486 34.4741 115.866 35.1378 114.177 35.1378H6.82332C5.13431 35.1378 3.51447 34.4741 2.32016 33.2926C1.12585 32.1111 0.454895 30.5087 0.454895 28.8378V6.3Z" fill="black"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M114.177 0.63H6.82332C5.30321 0.63 3.84536 1.22737 2.77048 2.2907C1.6956 3.35404 1.09174 4.79622 1.09174 6.3V28.8378C1.09174 30.3416 1.6956 31.7838 2.77048 32.8471C3.84536 33.9104 5.30321 34.5078 6.82332 34.5078H114.177C115.697 34.5078 117.155 33.9104 118.23 32.8471C119.304 31.7838 119.908 30.3416 119.908 28.8378V6.3C119.908 4.79622 119.304 3.35404 118.23 2.2907C117.155 1.22737 115.697 0.63 114.177 0.63ZM6.82332 0C5.13431 0 3.51447 0.663748 2.32016 1.84523C1.12585 3.02671 0.454895 4.62914 0.454895 6.3V28.8378C0.454895 30.5087 1.12585 32.1111 2.32016 33.2926C3.51447 34.4741 5.13431 35.1378 6.82332 35.1378H114.177C115.866 35.1378 117.486 34.4741 118.68 33.2926C119.874 32.1111 120.545 30.5087 120.545 28.8378V6.3C120.545 4.62914 119.874 3.02671 118.68 1.84523C117.486 0.663748 115.866 0 114.177 0H6.82332Z" fill="black"></path><path d="M25.1698 17.8389C25.1698 14.7672 27.81 13.1769 27.9201 13.1769C26.4899 11.1645 24.0699 10.7406 23.3002 10.7406C21.3197 10.5291 19.4501 11.9061 18.5694 11.9061C17.4695 11.9061 16.0402 10.7406 14.2798 10.8468C12.1892 10.8468 10.2095 12.0123 9.10958 13.9194C6.90884 17.6274 8.55917 23.1363 10.6498 26.2089C11.7497 27.7983 13.0698 29.2815 14.6092 29.2815C16.1494 29.1753 16.8099 28.2222 18.6795 28.2222C20.55 28.2222 21.2105 29.2815 22.7498 29.07C24.5102 29.07 25.5001 27.4806 26.6 26.1036C27.81 24.408 28.3604 22.8186 28.3604 22.6071C28.4705 22.8186 25.1698 21.5478 25.1698 17.8389ZM21.9802 8.83349C22.8599 7.77419 23.4103 6.39719 23.3002 5.01929C22.0902 5.01929 20.55 5.86709 19.5602 6.82109C18.7896 7.66799 18.13 9.25739 18.2401 10.5291C19.6702 10.6344 21.2105 9.89279 21.9802 8.83349ZM44.5407 23.2947H39.9828L38.8665 26.469H36.8195L41.2856 14.5854H43.3317L47.7031 26.469H45.6561L44.5407 23.2947ZM40.3558 21.7521H44.0759L42.3082 16.4907L40.3549 21.7521H40.3558ZM57.1912 22.2057C57.1912 24.9273 55.7028 26.5599 53.4702 26.5599C52.2611 26.5599 51.2376 26.0154 50.6799 25.0182V29.2815H48.9122V17.7606H50.6799V19.2123C50.9715 18.7393 51.3815 18.3489 51.8703 18.0786C52.3592 17.8084 52.9102 17.6675 53.4702 17.6697C55.61 17.6697 57.1912 19.3932 57.1912 22.2057ZM55.3307 22.2057C55.3307 20.4822 54.4009 19.2123 53.0053 19.2123C51.7034 19.2123 50.6799 20.3913 50.6799 22.2057C50.6799 24.0201 51.6097 25.1991 53.0053 25.1991C54.4009 25.0182 55.3307 23.9301 55.3307 22.2057ZM66.9576 22.2057C66.9576 24.9273 65.4692 26.5599 63.2366 26.5599C62.0275 26.5599 61.0049 26.0154 60.4463 25.0182V29.2815H58.6805V17.7606H60.3544V19.2123C60.646 18.7393 61.056 18.3489 61.5449 18.0786C62.0337 17.8084 62.5848 17.6675 63.1447 17.6697C65.3773 17.6697 66.9576 19.3932 66.9576 22.2057ZM65.0043 22.2057C65.0043 20.4822 64.0745 19.2123 62.6789 19.2123C61.377 19.2123 60.3535 20.3913 60.3535 22.2057C60.3535 24.0201 61.2842 25.1991 62.6789 25.1991C64.1673 25.0182 65.0043 23.9301 65.0043 22.2057ZM73.2832 23.1129C73.376 24.2919 74.5851 25.1082 76.1672 25.1082C77.7475 25.1082 78.8638 24.3828 78.8638 23.2038C78.8638 22.2966 78.2124 21.7521 76.6312 21.2985L75.05 20.9358C72.8184 20.3913 71.7949 19.3932 71.7949 17.7606C71.7949 15.6735 73.5616 14.2227 76.1663 14.2227C78.771 14.2227 80.5387 15.6744 80.5387 17.7597H78.771C78.6782 16.5807 77.6547 15.8553 76.1663 15.8553C74.6779 15.8553 73.7481 16.5807 73.7481 17.5788C73.7481 18.486 74.3995 18.9396 75.9807 19.3023L77.2826 19.6659C79.7008 20.2095 80.7243 21.2076 80.7243 22.9311C80.7243 25.1091 78.9566 26.5599 75.9807 26.5599C73.2832 26.5599 71.5156 25.1991 71.4228 23.0229C71.5156 23.2947 73.2832 23.1129 73.2832 23.1129ZM84.7237 15.7644V17.8515H86.3977V19.2123H84.7237V24.0201C84.7237 24.7455 85.0967 25.1091 85.84 25.1091H86.3986V26.5599C86.2121 26.5599 85.84 26.6508 85.3751 26.6508C83.6083 26.6508 82.9569 26.0154 82.9569 24.3828V19.2123H81.655V17.7606H82.8641V15.6735L84.7237 15.7644ZM87.3283 22.2057C87.3283 19.4841 89.0023 17.8515 91.5142 17.8515C94.1189 17.8515 95.7001 19.575 95.7001 22.2057C95.7001 24.9273 94.0261 26.5599 91.5142 26.5599C89.0032 26.5599 87.3283 24.9273 87.3283 22.2057ZM93.9324 22.2057C93.9324 20.3004 93.0026 19.2123 91.607 19.2123C90.1195 19.2123 89.2816 20.3013 89.2816 22.2057C89.2816 24.111 90.2123 25.1991 91.607 25.1991C93.0026 25.1091 93.9324 24.0201 93.9324 22.2057ZM97.2813 17.7597H98.9553V19.2123C99.1418 18.2133 100.072 17.6697 101.095 17.6697C101.281 17.6697 101.56 17.6697 101.746 17.7597V19.3932C101.653 19.3032 101.281 19.3032 101.002 19.3032C99.886 19.3032 99.1418 20.0286 99.1418 21.2985V26.469H97.3741C97.2813 26.469 97.2813 17.7597 97.2813 17.7597ZM110.211 23.9292C110.024 25.4718 108.443 26.5599 106.397 26.5599C103.793 26.5599 102.211 24.9273 102.211 22.2057C102.211 19.4841 103.793 17.6697 106.397 17.6697C108.815 17.6697 110.397 19.3023 110.397 21.9339V22.5684H103.978V22.7502C103.978 24.2919 104.909 25.1991 106.304 25.1991C107.327 25.1991 108.071 24.7455 108.351 24.0201C108.351 23.9301 110.211 23.9301 110.211 23.9301V23.9292ZM103.978 21.2985H108.443C108.443 19.9377 107.514 19.1205 106.304 19.1205C105.002 19.1205 104.165 19.9377 103.978 21.2985ZM36.8204 12.1122V6.72209H38.6973C39.1212 6.72209 39.4442 6.74819 39.6671 6.79949C39.9791 6.87059 40.2457 6.99929 40.4659 7.18559C40.7534 7.42589 40.9681 7.73369 41.1091 8.10809C41.2528 8.48069 41.3247 8.90729 41.3247 9.38789C41.3247 9.79739 41.2765 10.1601 41.1791 10.476C41.0997 10.7565 40.9743 11.0222 40.8079 11.2626C40.6725 11.4535 40.504 11.6193 40.3103 11.7522C40.132 11.8692 39.9145 11.9592 39.6598 12.0204C39.3734 12.0853 39.0802 12.1161 38.7864 12.1122H36.8204ZM37.5409 11.4759H38.7045C39.0639 11.4759 39.345 11.4426 39.5479 11.3769C39.7535 11.3103 39.9173 11.2176 40.0392 11.0979C40.2102 10.9287 40.3421 10.7019 40.4368 10.4175C40.5332 10.1304 40.5814 9.78389 40.5814 9.37709C40.5814 8.81279 40.4868 8.38079 40.2994 8.07929C40.1129 7.77509 39.8863 7.57169 39.6189 7.46819C39.426 7.39529 39.1149 7.35839 38.6863 7.35839H37.5409V11.4759ZM42.239 7.48349V6.72209H42.9077V7.48349H42.239ZM42.239 12.1122V8.20799H42.9077V12.1122H42.239ZM43.6619 10.9467L44.3242 10.8441C44.3606 11.106 44.4643 11.3067 44.6326 11.4471C44.8037 11.5866 45.042 11.6559 45.3459 11.6559C45.6534 11.6559 45.8808 11.5947 46.03 11.4723C46.1783 11.3472 46.2529 11.2023 46.2529 11.0349C46.2543 10.9641 46.2368 10.8942 46.2021 10.8323C46.1675 10.7703 46.1169 10.7185 46.0555 10.6821C45.9645 10.6227 45.7362 10.548 45.3723 10.4571C44.881 10.3347 44.5407 10.2294 44.3497 10.1421C44.173 10.0615 44.0234 9.93247 43.9185 9.77039C43.8221 9.61175 43.7721 9.42984 43.7738 9.24479C43.7738 9.07019 43.8138 8.90999 43.8921 8.76239C43.974 8.61299 44.0849 8.48969 44.2232 8.39159C44.3279 8.31509 44.4689 8.25209 44.6472 8.19989C44.8282 8.14589 45.0211 8.11889 45.2267 8.11889C45.536 8.11889 45.8081 8.16389 46.041 8.25209C46.2766 8.34029 46.4504 8.45999 46.5614 8.61209C46.6723 8.76149 46.7497 8.96309 46.7915 9.21509L46.1374 9.30329C46.1168 9.11859 46.0233 8.94941 45.8772 8.83259C45.7362 8.72009 45.5351 8.66339 45.2749 8.66339C44.9683 8.66339 44.7491 8.71379 44.6172 8.81459C44.4862 8.91449 44.4207 9.03239 44.4207 9.16739C44.4207 9.25289 44.4479 9.32939 44.5025 9.39869C44.5571 9.47069 44.6426 9.52919 44.7591 9.57509C44.8255 9.59939 45.0229 9.65609 45.3504 9.74429C45.8235 9.86939 46.1529 9.97199 46.3385 10.053C46.5268 10.1313 46.6742 10.2465 46.7806 10.3986C46.8871 10.5516 46.9398 10.7397 46.9398 10.9656C46.9398 11.1861 46.8743 11.394 46.7433 11.5902C46.6047 11.7917 46.4096 11.9487 46.182 12.042C45.9363 12.1473 45.6598 12.2004 45.3495 12.2004C44.8364 12.2004 44.4452 12.0951 44.1759 11.8845C43.9075 11.673 43.7365 11.3607 43.6619 10.9467ZM47.7359 13.608V8.20799H48.3454V8.71469C48.4892 8.51669 48.6511 8.36819 48.8322 8.27009C49.0132 8.16929 49.2325 8.11979 49.4899 8.11979C49.8265 8.11979 50.124 8.20529 50.3815 8.37629C50.639 8.54819 50.8337 8.79029 50.9656 9.10529C51.0966 9.41579 51.1621 9.75779 51.1621 10.1313C51.1621 10.53 51.0893 10.89 50.9437 11.2113C50.8134 11.5143 50.5928 11.7707 50.3114 11.9466C50.0358 12.1158 49.7465 12.2004 49.4417 12.2004C49.2188 12.2004 49.0177 12.1536 48.8394 12.0609C48.6713 11.974 48.5233 11.8535 48.4046 11.7072V13.6089H47.7359V13.608ZM48.3418 10.1817C48.3418 10.6839 48.4446 11.0556 48.6502 11.2959C48.8558 11.5362 49.1051 11.6559 49.3962 11.6559C49.6946 11.6559 49.9484 11.5326 50.1586 11.2851C50.3715 11.0349 50.4779 10.6488 50.4779 10.1268C50.4779 9.62909 50.3742 9.25649 50.1659 9.00899C49.9603 8.76149 49.7137 8.63819 49.4262 8.63819C49.1415 8.63819 48.8895 8.77049 48.6684 9.03419C48.45 9.29699 48.3409 9.67949 48.3409 10.1817H48.3418ZM51.7234 10.1601C51.7234 9.43649 51.9263 8.90099 52.333 8.55359C52.6723 8.26379 53.0863 8.11979 53.5739 8.11979C54.117 8.11979 54.5601 8.29619 54.9049 8.64899C55.2488 8.99999 55.4216 9.48419 55.4216 10.1043C55.4216 10.6074 55.3443 11.0034 55.1906 11.2923C55.0395 11.5794 54.8176 11.8017 54.5264 11.961C54.2352 12.1209 53.907 12.2034 53.5739 12.2004C53.0217 12.2004 52.5741 12.0249 52.2329 11.6748C51.8935 11.3238 51.7234 10.8198 51.7234 10.1601ZM52.4112 10.1601C52.4112 10.6596 52.5204 11.0349 52.7415 11.2851C52.9625 11.5326 53.24 11.6559 53.5739 11.6559C53.906 11.6559 54.1825 11.5308 54.4027 11.2815C54.6238 11.0313 54.7339 10.6497 54.7339 10.1385C54.7339 9.65519 54.622 9.28979 54.3991 9.04229C54.2987 8.92261 54.1724 8.82676 54.0296 8.7618C53.8868 8.69685 53.7311 8.66444 53.5739 8.66699C53.24 8.66699 52.9625 8.79119 52.7415 9.03869C52.5213 9.28619 52.4112 9.65969 52.4112 10.1601ZM56.2095 12.1122V8.20799H56.8109V8.76239C57.102 8.33399 57.5205 8.11979 58.0673 8.11979C58.3056 8.11979 58.5231 8.16209 58.7223 8.24849C58.9225 8.33129 59.0717 8.44199 59.1708 8.57879C59.2709 8.71649 59.34 8.87939 59.3801 9.06749C59.4037 9.19079 59.4165 9.40499 59.4165 9.71099V12.1122H58.7478V9.73709C58.7478 9.46709 58.7214 9.26639 58.6695 9.13409C58.617 8.99887 58.5186 8.88593 58.3912 8.81459C58.251 8.73122 58.0897 8.68907 57.9263 8.69309C57.6546 8.68831 57.3908 8.78394 57.1866 8.96129C56.981 9.14039 56.8782 9.47969 56.8782 9.98009V12.1122H56.2095ZM60.6801 12.1122V8.20799H61.3488V12.1122H60.6801ZM60.6465 7.72199L61.1405 6.69329H62.0184L61.1996 7.72199H60.6465ZM63.6606 12.1122L62.1594 8.20799H62.8654L63.7124 10.5462C63.8043 10.7982 63.8889 11.061 63.9653 11.3328C64.0254 11.1267 64.1082 10.8792 64.2146 10.5903L65.0916 8.20799H65.7794L64.2856 12.1122H63.6606ZM69.0719 10.854L69.7633 10.9395C69.6542 11.3391 69.4522 11.6487 69.1574 11.8692C68.8627 12.0897 68.486 12.2004 68.0275 12.2004C67.4507 12.2004 66.9922 12.0249 66.6528 11.6748C66.3162 11.322 66.147 10.8279 66.147 10.1934C66.147 9.53639 66.318 9.02609 66.6601 8.66339C67.0022 8.30069 67.4452 8.11979 67.9902 8.11979C68.5178 8.11979 68.9491 8.29709 69.2839 8.65259C69.6187 9.00809 69.7852 9.50759 69.7852 10.1529C69.7852 10.1916 69.7843 10.2501 69.7815 10.3293H66.8384C66.863 10.7577 66.9858 11.0862 67.206 11.3139C67.427 11.5425 67.7018 11.6559 68.0311 11.6559C68.2768 11.6559 68.486 11.5929 68.6589 11.4651C68.8326 11.3373 68.97 11.133 69.0719 10.854ZM66.8757 9.78479H69.0792C69.0492 9.45629 68.9655 9.20969 68.8263 9.04589C68.7276 8.92315 68.6014 8.82473 68.4578 8.75836C68.3141 8.69199 68.1569 8.65948 67.9984 8.66339C67.6909 8.66339 67.4316 8.76509 67.2214 8.96939C67.0122 9.17189 66.8975 9.44369 66.8757 9.78479ZM70.5921 12.1122V6.72209H71.2608V12.1122H70.5921ZM77.1216 10.854L77.813 10.9395C77.7038 11.3391 77.5019 11.6487 77.2071 11.8692C76.9123 12.0897 76.5357 12.2004 76.0772 12.2004C75.5004 12.2004 75.0418 12.0249 74.7025 11.6748C74.3659 11.322 74.1967 10.8279 74.1967 10.1934C74.1967 9.53639 74.3677 9.02609 74.7098 8.66339C75.0518 8.30069 75.4949 8.11979 76.0408 8.11979C76.5684 8.11979 76.9988 8.29709 77.3336 8.65259C77.6684 9.00809 77.8358 9.50759 77.8358 10.1529C77.8358 10.1916 77.8339 10.2501 77.8312 10.3293H74.8881C74.9127 10.7577 75.0355 11.0862 75.2565 11.3139C75.4767 11.5425 75.7515 11.6559 76.0808 11.6559C76.3264 11.6559 76.5357 11.5929 76.7085 11.4651C76.8823 11.3373 77.0206 11.133 77.1216 10.854ZM74.9254 9.78479H77.1289C77.0997 9.45629 77.0151 9.20969 76.8769 9.04589C76.7781 8.92303 76.6518 8.82453 76.5079 8.75816C76.3641 8.69178 76.2067 8.65934 76.048 8.66339C75.7405 8.66339 75.4813 8.76509 75.2711 8.96939C75.0628 9.17189 74.9472 9.44369 74.9254 9.78479ZM78.6564 12.1122V8.20799H79.255V8.75519C79.3789 8.56426 79.5486 8.40659 79.749 8.29619C79.9555 8.17829 80.1893 8.11979 80.4514 8.11979C80.7443 8.11979 80.9836 8.17919 81.1692 8.29979C81.3575 8.41949 81.4903 8.58779 81.5667 8.80379C81.8788 8.34749 82.2855 8.11979 82.7858 8.11979C83.177 8.11979 83.4782 8.22779 83.6892 8.44289C83.8994 8.65619 84.0049 8.98559 84.0049 9.43199V12.1122H83.3399V9.65249C83.3399 9.38789 83.3171 9.19799 83.2726 9.08279C83.2301 8.9644 83.1475 8.86422 83.0388 8.79929C82.9178 8.7264 82.7782 8.68953 82.6366 8.69309C82.3601 8.69309 82.129 8.78489 81.9452 8.96849C81.7633 9.15029 81.6705 9.44189 81.6705 9.84329V12.1113H81.0018V9.57599C81.0018 9.28169 80.9472 9.06119 80.838 8.91449C80.7288 8.76779 80.5505 8.69399 80.3031 8.69399C80.1147 8.69399 79.9401 8.74259 79.779 8.84069C79.6181 8.94151 79.4963 9.09308 79.4333 9.27089C79.3615 9.45989 79.326 9.73169 79.326 10.0872V12.1122H78.6564Z" fill="white"></path></g><defs><clipPath id="clip0_160_6134"><rect width="121" height="36" fill="white"></rect></clipPath></defs></svg>
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

    <script src="public/script.js"></script>
</body>
</html>