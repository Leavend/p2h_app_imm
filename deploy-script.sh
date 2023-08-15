#!/bin/bash

# Navigasi ke direktori repositori Anda
# cd /var/www/p2h_app_imm/

# Lakukan git pull dengan mengatur konfigurasi safe.directory
git -c safe.directory=/var/www/p2h_app_imm pull --rebase origin Version2

# (Opsional) Restart layanan web server Anda (misalnya, Nginx atau Apache)
sudo systemctl restart nginx  # Ganti "nginx" dengan nama layanan web server Anda

echo "Git pull completed successfully"
