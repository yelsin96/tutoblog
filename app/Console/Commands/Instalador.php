<?php

namespace App\Console\Commands;

use App\Models\Rol;
use App\Models\Usuario;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Instalador extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tutoblog:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ejecuta el instalador inicial del proyecto';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if(!$this->verificar()){
            $rol = $this->crearRolSuperAdmin();
            $usuario = $this->crearUsuarioSuperAdmin();
            $usuario->roles()->attach($rol);
            $this->line('El rol y usuario se instlaron correctamente');
        }else{
            $this->error('No se puede ejecutar el instalador, por que ya hay un rol creado');
        }
    }

    private function verificar(){
        return $rol = Rol::find(1);
    }

    private function crearRolSuperAdmin(){
        $rol = 'super Administrador';
        return Rol::create([
            'nombre' => $rol,
            'slug' => Str::slug($rol, '_')
        ]);
    }

    private function crearUsuarioSuperAdmin(){
        return Usuario::create([
            'nombre' => 'tutoAdmin',
            'email' => 'tutoAdmin@gmail.com',
            'password' => Hash::make('pass1234'),
            'estado' => 1
        ]);
    }
}
