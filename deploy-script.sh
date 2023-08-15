#!/bin/bash

# Pastikan script dijalankan sebagai root
if [ "$EUID" -ne 0 ]; then
    echo "This script must be run as root"
    exit 1
fi

# Navigasi ke direktori repositori Anda
cd /var/www/p2h_app_***/

# Lakukan commit dengan memberi pesan "stash"
sudo git commit -m 'stash'

# Lakukan git pull dengan mengatur konfigurasi safe.directory
sudo git pull --rebase origin Version2  # Ganti "main" dengan nama cabang yang sesuai

# (Opsional) Restart layanan web server Anda (misalnya, Nginx atau Apache)
sudo systemctl restart nginx  # Ganti "nginx" dengan nama layanan web server Anda

echo "Git pull completed successfully"
