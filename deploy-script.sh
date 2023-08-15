#!/bin/bash

# Navigasi ke direktori repositori Anda
cd /var/www/p2h_app_imm/

# Lakukan git pull
git pull --rebase origin Version2  # Ganti "main" dengan nama cabang yang sesuai

# (Opsional) Restart layanan web server Anda (misalnya, Nginx atau Apache)
sudo systemctl restart nginx  # Ganti "nginx" dengan nama layanan web server Anda

echo "Git pull completed successfully"
