<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Madruga - Portfólio Oficial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --azul-madruga: #1d2c4d;
            --azul-claro: #b2cde4;
            --bege: #f5f5dc;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--bege);
            min-height: 100vh;
        }
        
        .hero-madruga {
            background: linear-gradient(135deg, #8a9ec9 0%, var(--azul-madruga) 100%);
        }
        
        .retrato-madruga {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid var(--azul-claro);
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        
        .frase-madruga {
            font-style: italic;
            background: rgba(255,255,255,0.85);
            border-left: 4px solid var(--azul-madruga);
            transition: all 0.4s ease;
            position: relative;
        }
        
        .frase-madruga:hover {
            transform: scale(1.02);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .trabalho-card {
            border-left: 4px solid var(--azul-madruga);
            transition: transform 0.3s ease;
        }
        
        .trabalho-card:hover {
            transform: translateY(-5px) rotate(1deg);
        }
        
        .tag-madruga {
            background-color: var(--azul-claro);
            color: var(--azul-madruga);
        }
        
        @keyframes flutuar {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        .flutuar {
            animation: flutuar 3s ease-in-out infinite;
        }
        
        .familia-madruga img {
            border: 3px solid var(--azul-claro);
            transition: all 0.3s ease;
        }
        
        .familia-madruga img:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>
   
    <section class="hero is-medium hero-madruga">
        <div class="hero-body">
            <div class="container has-text-centered">
                <img src="madruguinha.jpg" alt="Seu Madruga de terno e gravata, com expressão de espanto" 
                     class="retrato-madruga animate__animated animate__fadeIn flutuar">
                <h1 class="title is-2 animate__animated animate__fadeIn" style="color: #100e0e; margin-top: 1rem;">Seu Madruga</h1>
                <h2 class="subtitle animate__animated animate__fadeIn" style="color: #100e0e;">Especialista em viver sem trabalhar</h2>
                
                <div class="frase-madruga animate__animated animate__fadeIn" style="max-width: 600px; margin: 1.5rem auto; padding: 1.25rem;">
                    "Trabalhar? Não! O trabalho é um sacrifício que só traz cansaço e desgosto."
                </div>
                
                <a href="#trabalhos" class="button is-link animate__animated animate__pulse" 
                   style="background-color: var(--azul-madruga); border: none;">
                    Minhas "Profissões"
                </a>
            </div>
        </div>
    </section>

  
    <section class="section" id="trabalhos">
        <div class="container">
            <h2 class="title is-3 has-text-centered animate__animated animate__fadeIn" 
                style="color: var(--azul-madruga); border-bottom: 3px solid var(--azul-claro); display: inline-block; padding-bottom: 0.5rem;">
                Minhas Tentativas de Trabalho
            </h2>
            
            <div class="columns is-centered" style="margin-top: 2rem;">
                <div class="column is-8">
                    
                    <div class="box trabalho-card animate__animated animate__fadeInLeft">
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p class="has-text-weight-bold" style="color: var(--azul-madruga); font-size: 1.1rem;">Vendedor Ambulante</p>
                                    <div class="tags" style="margin: 0.5rem 0;">
                                        <span class="tag tag-madruga">Fracasso</span>
                                        <span class="tag tag-madruga">1980</span>
                                    </div>
                                    <p>Tentei vender balões e pipocas, mas acabei comendo toda a mercadoria. Resultado: prejuízo e dor de barriga.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    
                    
                    <div class="box trabalho-card animate__animated animate__fadeInLeft" style="animation-delay: 0.1s">
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p class="has-text-weight-bold" style="color: var(--azul-madruga); font-size: 1.1rem;">Faz-tudo da Vila</p>
                                    <div class="tags" style="margin: 0.5rem 0;">
                                        <span class="tag tag-madruga">Temporário</span>
                                        <span class="tag tag-madruga">1975</span>
                                    </div>
                                    <p>Consertava coisas na vila em troca de comida. Até que quebrei mais do que consertei e fui "demitido".</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    
                    
                    <div class="box trabalho-card animate__animated animate__fadeInLeft" style="animation-delay: 0.2s">
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p class="has-text-weight-bold" style="color: var(--azul-madruga); font-size: 1.1rem;">Ator de Novelas</p>
                                    <div class="tags" style="margin: 0.5rem 0;">
                                        <span class="tag tag-madruga">Sucesso Relativo</span>
                                        <span class="tag tag-madruga">1971-1981</span>
                                    </div>
                                    <p>Minha única experiência profissional bem-sucedida foi interpretar a mim mesmo na TV. Mas isso não conta como trabalho, era diversão!</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    
                    
                    <div class="box trabalho-card animate__animated animate__fadeInLeft" style="animation-delay: 0.3s">
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p class="has-text-weight-bold" style="color: var(--azul-madruga); font-size: 1.1rem;">Fiscal de Obras</p>
                                    <div class="tags" style="margin: 0.5rem 0;">
                                        <span class="tag tag-madruga">Desastre</span>
                                        <span class="tag tag-madruga">1978</span>
                                    </div>
                                    <p>Durou um dia. No primeiro serviço que fiscalizei, o muro caiu em cima de mim. Decidi que fiscalização não era para mim.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <section class="section" id="informacoes-gerais">
        <div class="container">
            <h2 class="title is-3 section-title animate__animated animate__fadeIn">Informações Gerais</h2>
            <div class="content animate__animated animate__fadeIn">
                <div class="box">
                    <h3 class="title is-4">Quem Sou</h3>
                    <p>Sou Seu Madruga, um personagem icônico da Vila do Chaves, conhecido por minha habilidade em evitar o trabalho e por minha sabedoria peculiar sobre a vida.</p>
                    <p><strong>Nome:</strong> Ramon Valdés</p>
                    <p><strong>Nacionalidade:</strong> Mexicano</p>
                    <p><strong>Data de Nascimento:</strong> 02/09/1924</p>
                    <p><strong>Ocupação:</strong> Desempregado</p>
                </div>
                <div class="box">
                    <h3 class="title is-4">Interesses</h3>
                    <p>Tenho um grande apreço por literatura e cinema, especialmente por histórias que fazem rir e refletir. Acredito que a vida deve ser vivida com leveza e diversão.</p>
                </div>
                <div class="box">
                    <h3 class="title is-4">Curiosidades</h3>
                    <ul>
                        <li>Nasci na década de 1920, mas minha alma é eterna!</li>
                        <li>Já tive várias "profissões", mas nenhuma delas me prendeu por muito tempo.</li>
                        <li>Sou pai da Chiquinha e sempre estou fugindo do Senhor Barriga.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    
    <section class="section">
        <div class="container" style="background-color: white; border-radius: 8px; padding: 2rem; box-shadow: 0 2px 10px rgba(0,0,0,0.08);">
            <h2 class="title is-3 has-text-centered" style="color: var(--azul-madruga); border-bottom: 3px solid var(--azul-claro); display: inline-block; padding-bottom: 0.5rem;">
                Residência e Família
            </h2>
            
            <div class="content" style="margin-top: 1.5rem; text-align: center;">
                <p><strong>Residência:</strong> Vive na casa de número 72 da Vila San Martín, onde divide o quintal com seus vizinhos.</p>
                <p><strong>Família:</strong> Pai de Chaves e Chiquinha, avô de Popis. Ex-marido de Dona Clotilde.</p>
                <p><strong>Parentesco:</strong> Irmão da Bruxa do 71, com quem tem constantes desavenças.</p>
            </div>
            
            <div class="familia-madruga" style="display: flex; justify-content: center; gap: 1.5rem; margin-top: 1.5rem; flex-wrap: wrap;">
                <img src="chiq.jpeg" alt="Casa humilde na Vila San Martín com portão verde" style="border-radius: 6px; max-width: 300px; height: auto;">
                <img src="port.jpeg" alt="Família do Seu Madruga reunida no quintal" style="border-radius: 6px; max-width: 300px; height: auto;">
            </div>
        </div>
    </section>

    
    <section class="section">
        <div class="container">
            <h2 class="title is-3 has-text-centered animate__animated animate__fadeIn" 
                style="color: var(--azul-madruga); border-bottom: 3px solid var(--azul-claro); display: inline-block; padding-bottom: 0.5rem;">
                Minha Filosofia
            </h2>
            
            <div class="content has-text-centered animate__animated animate__fadeIn" style="max-width: 700px; margin: 0 auto;">
                <div class="frase-madruga" style="padding: 1.5rem; margin: 2rem 0;">
                    "Não há trabalho ruim, o ruim é ter que trabalhar!"
                </div>
                
                <p>Após tantas tentativas frustradas, cheguei à conclusão que minha verdadeira vocação é:</p>
                <ul style="text-align: left; display: inline-block; margin: 1rem 0;">
                    <li>✔ Viver sem trabalhar</li>
                    <li>✔ Dar aulas de vida para o Chaves</li>
                    <li>✔ Fugir do Senhor Barriga</li>
                    <li>✔ Ser pai da Chiquinha</li>
                </ul>
            </div>
        </div>
    </section>

    
    <footer class="animate__animated animate__fadeIn" style="background-color: var(--azul-madruga); color: white; padding: 1.5rem; text-align: center; margin-top: 2rem;">
        <p>© 2023 Seu Madruga - "Trabalhar? Não, obrigado!"</p>
    </footer>

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__fadeInUp');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.animate__animated').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>
