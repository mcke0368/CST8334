<?php


/* Updated for Laravel 5.0 from 
https://anthonysterling.com/posts/using-an-artisan-command-to-create-a-database-in-laravel-or-lumen.html
*/


namespace App\Console\Commands;

use Illuminate\Console\Command;
use PDO;
use PDOException;

class DatabasedropCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'db:drop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command drops a database';

    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'db:drop';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $database = env('DB_DATABASE', false);

        if (! $database) {
            $this->info('Skipping database drop as env(DB_DATABASE) is empty');
            return;
        }

        try {

            $confirm = $this->ask("Are you sure you want to drop '" . $database . "'? Type db name to confirm."); 

            if (strcmp($confirm, $database) == 0) {
                $pdo = $this->getPDOConnection(env('DB_HOST'), env('DB_PORT'), env('DB_USERNAME'), env('DB_PASSWORD'));

                $pdo->beginTransaction();
                $pdo->exec(sprintf(
                    'DROP DATABASE IF EXISTS %s;',
                    $database));
                $pdo->commit();
                $this->info(sprintf('Successfully dropped %s database', $database));
            }
            else {
                $this->info("Crisis averted! database not dropped!");
            }
        } catch (PDOException $exception) {
            $this->error(sprintf('Failed to drop %s database, %s', $database, $exception->getMessage()));
        }
    }

    /**
     * @param  string $host
     * @param  integer $port
     * @param  string $username
     * @param  string $password
     * @return PDO
     */
    private function getPDOConnection($host, $port, $username, $password)
    {
        return new PDO(sprintf('mysql:host=%s;port=%d;', $host, $port), $username, $password);
    }
}

