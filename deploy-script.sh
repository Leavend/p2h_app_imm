#!/bin/bash

# Navigasi ke direktori repositori Anda
# cd /var/www/p2h_app_imm/

# sudo chmod -R 755 /var/www/p2h_app_imm/.git

# git config core.sharedRepository group

git commit -m 'stash'

git config --global --add safe.directory /var/www/p2h_app_imm

# Lakukan git pull dengan mengatur konfigurasi safe.directory
git pull --rebase origin Version2

# (Opsional) Restart layanan web server Anda (misalnya, Nginx atau Apache)
sudo systemctl restart nginx  # Ganti "nginx" dengan nama layanan web server Anda

echo "Git pull completed successfully"
