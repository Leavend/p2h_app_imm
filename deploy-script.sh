set e

sudo sudo git commit -m 'stash'

# Lakukan git pull dengan mengatur konfigurasi safe.directory
sudo sudo git pull --rebase origin Version2

# (Opsional) Restart layanan web server Anda (misalnya, Nginx atau Apache)
sudo sudo systemctl restart nginx  # Ganti "nginx" dengan nama layanan web server Anda

echo "Git pull completed successfully"
