FROM wordpress:latest

# Alter .htaccess in order to allow bigger file uploads.
RUN <<EOF cat >> .htaccess
# Virtualenvwrapper configuration.
php_value upload_max_filesize 256M
php_value post_max_size 256M
php_value max_execution_time 300
php_value max_input_time 300
EOF

# Alter .htaccess in order to display PHP errors.
RUN <<EOF cat >> .htaccess
php_flag display_errors On
EOF
