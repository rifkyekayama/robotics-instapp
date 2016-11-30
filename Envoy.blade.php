@servers(['local' => '127.0.0.1', 'web' => 'root@vdi-studio.com'])

@story('deploy')
    push
    pull-server
@endstory

@task('tes', ['on' => 'web'])
	ll
@endtask

@task('push', ['on' => 'local'])
	git push origin development
	composer dump-autoload
@endtask

@task('pull-server', ['on' => 'web'])
	cd /var/www/robotics.vdi-studio.com/
	chown www-data:www-data -R *
	git stash
    git pull origin development
    composer dump-autoload
@endtask

@task('composer', ['on' => 'web'])
	cd /var/www/robotics.vdi-studio.com/
    composer update
@endtask

@task('migrate:refresh', ['on' => 'web'])
	cd /var/www/robotics.vdi-studio.com/storage/app/public/
	rm -rf *
	cd /var/www/robotics.vdi-studio.com/
	php artisan migrate:refresh --seed
	chown www-data:www-data -R *
	chmod 777 -R storage/
@endtask

@task('laravel:log', ['on' => 'web'])
	cd /var/www/robotics.vdi-studio.com/
	cd storage/logs/
	cat laravel.log
@endtask

@task('up', ['on' => 'web'])
	cd /var/www/robotics.vdi-studio.com/
	php artisan up
@endtask

@task('down', ['on' => 'web'])
	cd /var/www/robotics.vdi-studio.com/
	php artisan down
@endtask