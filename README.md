# narcims
Narcissistic cms
Narcissistic cannibal https://www.youtube.com/watch?v=CUOlc_j4rMA

Virtual host should be pointed in the project root, .htaccess deals with fronted vs backend parts

example:

    <VirtualHost *:80>
        ServerName www.pecine.loc
        ServerAdmin slaven@fb.loc
        DocumentRoot "/path-to-project/narcims"
        ErrorLog "logs/pecine-error_log"
        CustomLog "logs/pecine-access_log" common
        <Directory "/path-to-project/narcims">
            Options Indexes FollowSymLinks Includes execCGI
            AllowOverride All
            Require all granted
        </Directory>
    </VirtualHost>
