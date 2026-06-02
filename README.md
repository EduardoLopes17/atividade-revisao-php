
# Sobre o projeto
Este é um projeto simples feito para estudar os fundamentos do PHP. A ideia foi criar um sistema básico onde um usuário pode fazer login, acessar uma área restrita e cadastrar outros usuários no banco de dados.

# Ferramentas 
PHP
MySQL 
CSS 
HTML
XAMPP 

# Estrutura de arquivos
text
├── index.php                
├── styles/
│   └── style.css            
├── infra/
│   ├── db/
│   │   ├── connect.php      
│   │   └── script.sql       
├── public/
│   ├── home.php             
│   ├── logout.php           
│   └── components/          

# Como funciona
1. Login: O usuário digita os dados e o PHP confere no banco se estão certos. Se estiverem, o sistema cria uma sessão para permitir o acesso.
2. Bloqueio: A página interna só abre se você estiver logado. Se tentar acessar direto pelo link, o sistema te manda de volta para o login.
3. Cadastro e Lista: Na página principal, dá para cadastrar novos nomes. O sistema salva no banco e já mostra na tabela.
4. Sair: Ao clicar em sair, a sessão é fechada e o acesso é encerrado.

