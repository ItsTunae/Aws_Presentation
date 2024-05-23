<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>AWS presentation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand ">
                <img src="./image/LogoProject.png" width="30" height="24">
                AWS presentation
            </a>
            <a class="navbar-brand"> - made by Tognella Alessandro</a>
    </div>
</nav>
<div class="container-fluid pt-md-3 pb-md-3 mt-3">
    <div class="border border-black rounded p-3 mb-2 bg-light text-dark me-6 ms-6">
        <div class="p-3 text-primary-emphasis bg-secondary-subtle border rounded-3 ms-3 me-3">
            <h2 class=" text-center">Guida al come creare un sito tramite AWS</h2>
            <h2 class="text-left fw-bold">Introduzione</h2>
            <p class="text-left">In questa presentazione andremo a vedere come creare un sito web su AWS 
                e tutte le procedure ad esso annesse.</p>
                <p>Vediamo come incominciare.</p>
            </div>
        <h1></h1>
        <div class="p-3 text-primary-emphasis bg-secondary-subtle border rounded-3 ms-3 me-3">

            <h2 class="text-left fw-bold">Requisiti di lavoro.</h2>
            <p>- disporre di un accesso alla piattaforma di AWS.<br>
                - disporre del software putty.<br>
                - disporre di un web server disponibile (apche2/nginx)<br>
                - disporre di un Database Managamente Language disponibile.<br>
            </p>
        </div>
        <h1></h1>
        <div class="p-3 text-primary-emphasis bg-secondary-subtle border rounded-3 ms-3 me-3">

            <h2 class="text-left fw-bold">Creazione della istanza EC2</h2>
            <p>Una volta fatto l'accesso al sito di AWS, seguiamo i seguenti passaggi: </p>
            <p>1. Andare nella sezione "Istanze"<br>
                2. Selezionare "Avvia Istanza" dal pannello di controllo<br>
                3. Impostare un nome, e un sistema operativo, all'istanza (prendiamo come esempio 'Ubuntu')<br>
             </p>
             <div class="text-center">
                <img class="rounded-3" style="width: 75%" src="images/image2.png">                
             </div>
             <br>
             <p>4. Creare una coppia di chiavi per accedere al server<br>
                (N.B. Le chiavi sono univoche e, se cancellate, andrà ricreata una nuova istanza e una
                nuova coppia di chiavi).
             </p>
             <div class="text-center">
                <img class="rounded-3" style="width: 45%" src="images/image1.png">                
             </div>
             <br>
             <p>5. Una volta impostati questi valori cliccare su 'Lancia Istanza' per creare la nuova istanza. <br>
                Successivamente bisogna modificare le regole del firewall. <p>Per fare questo, selezionare l'istanza creata <br>
                ed andare nella sezione Sicurezza per poi selezionare i gruppi sicurezza (sg-...).<br>
                e creare delle nuove regole con 'Aggiugni Regola'
                </p>
                <div class="text-center">
                    <img class="rounded-3" style="width: 60%" src="images/image3.png">                
                 </div>
                 <br>
                 <div class="text-center">
                    <img class="rounded-3" style="width: 75%" src="images/image4.png">                
                 </div>
        </div>
        <h1></h1>
        <div class="p-3 text-primary-emphasis bg-secondary-subtle border rounded-3 ms-3 me-3">

            <h2 class="text-left fw-bold">Connettersi ad AWS tramite virtual machine</h2>
            <p>Una volta settata l'istanza, dobbiamo accedere con una macchina virtuale; <br>
                in questo caso utilizzeremo il software 'putty' seguendo questi passi</p>
            <p>1. copia e incollare l'indirizzo della iPv4 dell'istanza e metterlo nella sezione <br>
                'Host Name' di PuTTy</p>
                <div class="text-center">
                    <img class="rounded-3" style="width: 40%" src="images/putty1.png">                
                 </div>
                 <br>
            <p>2. andiamo in 'Connection' -> 'SSH' -> 'Auth' -> 'Credentials' e immettiamo <br>
                la chiave che abbiamo scaricato in precedenza per l'istanza</p>
                <div class="text-center">
                    <img class="rounded-3" style="width: 40%" src="images/putty2.png">                
                 </div>
        </div>
        <h1></h1>
        <div class="p-3 text-primary-emphasis bg-secondary-subtle border rounded-3 ms-3 me-3">

            <h2 class="text-left fw-bold">Installare Docker</h2>

            <p>Da qui seguiranno una serie di script di codice per installare Docker sulla macchina virtuale <br>
                vediamo quali e come: </p>
            <p>1. Aggiorniamo APT e ne controlliamo la versione</p>
            <code>
                <div class="code-text-container">
                    <div class="prefix">$</div>
                    <div class="text">sudo apt update</div>
                </div>
            </code>
            <code >
                <div class="code-text-container">
                    <div class="prefix">$</div>
                    <div class="text">sudo apt upgrade</div>
                </div>
            </code>
            <code>
                <div class="code-text-container">
                    <div class="prefix">$</div>
                    <div class="text">sudo apt --version</div>
                </div>
            </code>
            <br>
            <p>2. installiamo anche docker e ne controlliamo la versione</p>
            <code>
                <div class="code-text-container">
                    <div class="prefix">$</div>
                    <div class="text">sudo apt install docker.io</div>
                </div>
            </code>
            <br>
            <p>Installiamo docker-compose per i container</p>
            <code>
                   
                <div class="code-text-container">
                    <div class="prefix">$</div>
                    <div class="text">sudo apt install docker-compose</div>
                </div>
            </code>
            <br>
            <p>
				docker-compose verrà utilizzato per gestire i vari Docker container. <br>
				Tramite Docker, installare Nginx, che verrà utilizzato per hostare il sito sull'istanza AWS
			</p>
			<code>
				<div class="code-text-container">
					<div class="prefix">$</div>
					<div class="text">docker pull nginx</div>
				</div>
			</code>
		    </div>
            <h1></h1>
            <div class="p-3 text-primary-emphasis bg-secondary-subtle border rounded-3 ms-3 me-3">
                <h2 class="text-left fw-bold">Installare Ngix</h2>
                    <p>
                        Una volta installato Docker, docker-compose e Nginx, si può iniziare a creare i file che verranno utilizzati per l'hosting del sito. <br>
                        Per prima cosa bisogna creare una cartella che conterrà il progetto. Per farlo usare il seguente comando:
                    </p>
                    <code>
                        <div class="code-text-container">
                            <div class="prefix">$</div>
                            <div class="text">mkdir project</div>
                        </div>
                    </code>
                    <code>
                        <div class="code-text-container">
                            <div class="prefix">$</div>
                            <div class="text">cd project/</div>
                        </div>
                    </code>
                    <br>
                    <p>Creare un altra cartella dentro la cartella del progetto che conterrà il codice del sito.</p>
                    <code>
                        <div class="code-text-container">
                            <div class="prefix">project $</div>
                            <div class="text">mkdir php</div>
                        </div>
                    </code>
                    <br>
                    <p>All'interno della cartella creare un file chiamato "Dockerfile". <br> 
                        Questo file servirà a contenere la configurazione per la creazione del servizio per PHP.</p>
                    <code>
                        <div class="code-text-container">
                            <div class="prefix">project $</div>
                            <div class="text">cd php/</div>
                        </div>
                    </code>
                    <code>
                        <div class="code-text-container">
                            <div class="prefix">project/php $</div>
                            <div class="text">touch Dockerfile</div>
                        </div>
                    </code>
                    <br>
                    <p>Per scrivere nel file "docker-compose.yml" utilizzare l'editor di testo "nano" o qualsiasi altro editor.</p>
                    <code>
                        <div class="code-text-container">
                            <div class="prefix">project/php $</div>
                            <div class="text">sudo nano Dockerfile</div>
                        </div>
                    </code>
                    <br>
                    <p>Inserire il seguente codice all'interno di "Dockerfile":</p>
                    <code>
                        <div class="code-text-container">
                            <pre class="text">
                FROM php:7.4-fpm
                WORKDIR /var/www/html
                COPY . .
                RUN docker-php-ext-install mysqli pdo pdo_mysql
                RUN docker-php-ext-enable mysqli</pre>
                        </div>
                    </code>
                    <br>
                    <p>Una volta creato il Dockerfile dentro la cartella, torniamo indietro alla cartella del progetto. <br>
                        creiamo un file di nome "docker-compose.yml". <br>
                        Per creare il file usare il comando:</p>
                    <code>
                        <div class="code-text-container">
                            <div class="prefix">project/php $</div>
                            <div class="text">cd ..</div>
                        </div>
                    </code>
                    <code>
                        <div class="code-text-container">
                            <div class="prefix">project $</div>
                            <div class="text">touch docker-compose.yml</div>
                        </div>
                    </code>
                    <code>
                        <div class="code-text-container">
                            <div class="prefix">project $</div>
                            <div class="text">sudo nano docker-compose.yml</div>
                        </div>
                    </code>
                    <code>
                        <div class="code-text-container">
                            <pre class="text">
                services:
                nginx:
                build: ./nginx/
                ports:
                    - "80:80"
                    - "443:443"
                
                volumes:
                    - ./nginx/default.conf:/etc/nginx/conf.d/default.conf
                    - ./php:/var/www/html
                    - ./nginx/ssl:/etc/nginx/ssl
                
                php:
                build: ./php/
                expose:
                    - "9000"
                volumes:
                    - ./php/:/var/www/html/
                
                
                db:
                image: mariadb
                volumes:
                    -    mysql-data:/var/lib/mysql
                environment:
                    MYSQL_ROOT_PASSWORD: mariadb
                    MYSQL_DATABASE: AWS
                
                volumes:
                mysql-data:</pre>
                        </div>
                    </code>
                    <br>
                    <p>
                        La configurazione seguente permette il funzionamento del container Nginx sulla porta 80 e 443 (HTTP, HTTPS). <br>
                        Creiamo la cartella ngix e ad annessa una cartella Dockerfile. <br>
                        Dockerfile verrà utilizzato per contenere la configurazione per il servizio; secondo i successivi passaggi: 
                    </p>
                    <code>
                        <div class="code-text-container">
                            <div class="prefix">project $</div>
                            <div class="text">mkdir nginx</div>
                        </div>
                    </code>
                    <code>
                        <div class="code-text-container">
                            <div class="prefix">project $</div>
                            <div class="text">cd nginx/</div>
                        </div>
                    </code>
                    <br>
                    <p>Per far si che il sito funzioni in https con ssl bisogna creare dei certificati. Per farlo prima creare la cartella che conterrà i certificati:</p>
                    <code>
                        <div class="code-text-container">
                            <div class="prefix">project/nginx $</div>
                            <div class="text">mkdir ssl</div>
                        </div>
                    </code>
                    <br>
                    <p>E poi utilizzare il seguente comando per creare un certificato "self-made"</p>
                    <code>
                        <div class="code-text-container">
                            <div class="prefix">project/nginx $</div>
                            <div class="text">openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /ssl/cert.key -out /ssl/cert.pem</div>
                        </div>
                    </code>
                    <br>
                    <p>Questo comando creerà un certificato "self-made" valido per un anno. Una volta creato il certificato, creare il "Dockerfile" e il "default.conf":</p>
                    <code>
                        <div class="code-text-container">
                            <div class="prefix">project/nginx $</div>
                            <div class="text">touch Dockerfile</div>
                        </div>
                    </code>
                    <code>
                        <div class="code-text-container">
                            <div class="prefix">project/nginx $</div>
                            <div class="text">touch default.conf</div>
                        </div>
                    </code>
                    <br>
                    <p>
                        Prima cosa modificare il "Dockerfile" per creare il servizio nginx.
                    </p>
                    <code>
                        <div class="code-text-container">
                            <div class="prefix">project/nginx $</div>
                            <div class="text">sudo nano Dockerfile</div>
                        </div>
                    </code>
                    <code>
                        <div class="code-text-container">
                            <pre class="text">
                FROM nginx
                COPY ./default.conf /etc/nginx/conf.d/default.conf</pre>
                        </div>
                    </code>
                    <br>
                    <p>
                        Successivamente modificare il file "default.conf" per permettere al sito di essere visualizzato.
                    </p>
                    <code>
                        <div class="code-text-container">
                            <div class="prefix">project/nginx $</div>
                            <div class="text">sudo nano default.conf</div>
                        </div>
                    </code>
                    <code>
                        <div class="code-text-container">
                            <pre class="text">
                server {
                listen 80;
                return 301 https://$host$request_uri;
                }
                
                server {
                listen 443 ssl default_server;
                
                root /var/www/html;
                index index.php index.html;
                
                ssl_certificate /etc/nginx/ssl/cert.pem;
                ssl_certificate_key /etc/nginx/ssl/cert.key;
                
                location / {
                try_files $uri $uri/ =404;
                }
                
                location ~ \.php$ {
                include fastcgi_params;
                fastcgi_pass php:9000;
                fastcgi_index index.php;
                fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
                }
                
                location ~ \.css {
                add_header Content-Type text/css;
                }
                
                location ~ \.js {
                add_header Content-Type application/x-javascript;
                }
                
                error_page 404 /404.html;
                location = /404.html {
                internal;
                }
                }</pre>
                        </div>
                    </code>
                    <code>
                        <div class="code-text-container">
                            <div class="prefix">project/nginx $</div>
                            <div class="text">cd ..</div>
                        </div>
                    </code>
                </div>
                <h1></h1>
                <div class="p-3 text-primary-emphasis bg-secondary-subtle border rounded-3 ms-3 me-3">
                    <h2 class="text-left fw-bold">Realizzare il sito web</h2>
                    <p>
                        Per creare il sito si possono seguire 2 modi: <br>
                        1. Nella cartella "php" creare i file che comporranno il sito, come "index.php" etc. br e modificarli <br> 
                        utilizzando i comandi "touch" e "nano". <br>
                        2. Clonare i file del sito direttamente da github. <br>
                    </p>
                    <p>In questo caso verranno clonati i file dalla repository su github nella cartella "php" utilizzando il seguente comando:</p>
                    <code>
                        <div class="code-text-container">
                            <div class="prefix">project $</div>
                            <div class="text">git clone https://github.com/Username/Repository.git php/</div>
                        </div>
                    </code>
                    <br>
                    <p>Dopo aver clonato la repository tutti i file dovrebbero essere presenti nella cartella "php" del progetto.</p>
            </div> 
            <h1></h1>
            <div class="p-3 text-primary-emphasis bg-secondary-subtle border rounded-3 ms-3 me-3">
                <h2 class="text-left fw-bold">Installare MariaDB</h2>
                <p>
                    MariaDB è Database management system che serve appunto a gestire i database. <br>
                    Per prima cosa bisogna avviare i Docker container creati in precedenza utilizzando il seguente comando:
                </p>
                <code>
                    <div class="code-text-container">
                        <div class="prefix">project $</div>
                        <div class="text">sudo docker-compose up -d</div>
                    </div>
                </code>
                <br>
                <p>Per verificare che tutti i container sono stai avviati correttamente utilizzare:</p>
                <code>
                    <div class="code-text-container">
                        <div class="prefix">project $</div>
                        <div class="text">sudo docker ps</div>
                    </div>
                </code>
                <br>
                <p>
                    Dovrebbero essere visualizzati 3 container: Uno per nginx, uno per php e uno per MariaDB. <br>
                    Ora si può creare una sessione per gestire il container di MariaDB con il seguente comando:
                </p>
                <code>
                    <div class="code-text-container">
                        <div class="prefix">project $</div>
                        <div class="text">sudo docker exec -it project-db-1 /bin/sh</div>
                    </div>
                </code>
                <br>
                <p>Per creare un utente che potrà accedere al database bisogna prima accedere come root per creare l'utente e dargli i permessi. <br>
                    In questo caso verrà creato un utente chiamato "admin" e che avrà tutti i permessi.</p>
                <code>
                    <div class="code-text-container">
                        <div class="prefix">#</div>
                        <div class="text">mariadb -u root -pmariadb</div>
                    </div>
                </code>
                <code>
                    <div class="code-text-container">
                        <div class="prefix">MariaDB [(none)]></div>
                        <div class="text">CREATE USER 'admin' IDENTIFIED BY 'password';</div>
                    </div>
                </code>
                <code>
                    <div class="code-text-container">
                        <div class="prefix">MariaDB [(none)]></div>
                        <div class="text">GRANT ALL PRIVILEGES ON *.* TO 'admin';</div>
                    </div>
                </code>
                <br>
                <p>Ricaricare le varie cache interne per salvare i nuovi privilegi:</p>
                <code>
                    <div class="code-text-container">
                        <div class="prefix">MariaDB [(none)]></div>
                        <div class="text">FLUSH PRIVILEGES;</div>
                    </div>
                </code>
                <br>
                <p>Ora si può accedere a MariaDB utilizzando il nuovo utente creato (in questo caso non è necessario):</p>
                <code>
                    <div class="code-text-container">
                        <div class="prefix">#</div>
                        <div class="text">mariadb -u admin -ppassword</div>
                    </div>
                </code>
                <br>
                <p>Dopo questi passaggi MariaDB dovrebbe essere configurato e si può passare alla creazione del database.</p>
            </div>
            <h1></h1>
            <div class="p-3 text-primary-emphasis bg-secondary-subtle border rounded-3 ms-3 me-3">
                <h2 class="text-left fw-bold">Realizzazione e gestione del Dabatase</h2>
                <p>
                    Per creare il database si dovranno utilizzare le query base di SQL. In questo caso verrà creato un database chiamato 'AWS' che conterrà una tabella chiamata 'utenti'. <br>
                    Per creare il database utilizzare la seguente query:
                </p>
                <code>
                    <div class="code-text-container">
                        <div class="prefix">MariaDB [(none)]></div>
                        <div class="text">CREATE TABLE AWS;</div>
                    </div>
                </code>
                <br>
                <p>Entrare nel database:</p>
                <code>
                    <div class="code-text-container">
                        <div class="prefix">MariaDB [(none)]></div>
                        <div class="text">USE AWS;</div>
                    </div>
                </code>
                <br>
                <p>Creare la tabella 'utenti':</p>
                <code>
                    <div class="code-text-container">
                        <div class="prefix">MariaDB [AWS]></div>
                        <pre class="text">
            CREATE TABLE utenti (
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            email VARCHAR(50) NOT NULL,
            password CHAR(32) NOT NULL
            );</pre>
                    </div>
                </code>
                <br>
                <p>Una volta creata la tabella si può usare il comando exit per uscire da MariaDB; <br>
                     Per poi utilizzare la combinazione "CTRL + D" per chiudere la sessione creata in precedenza.</p>
                <p>Con questo, concludo la mia presentazione di AWS e sulla creazione di una web page; <br>
                    Grazie per la vostra pazienza nel leggere il contenuto. </p>
                </div>
            <h1></h1>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
