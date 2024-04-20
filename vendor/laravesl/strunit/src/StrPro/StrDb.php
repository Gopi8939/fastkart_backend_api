<?php

namespace Laravesl\Strunit\StrPro;

use mysqli;
use Exception;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;
use Spatie\Permission\Models\Permission;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;

/**
 * Database configuration
 */
class StrDb
{
    public function databaseSetup($database)
    {
        $this->databaseConfiguration($database[dbString('ZGF0YWJhc2U=')]);
        try {

            $this->sqliSetup($database[dbString('ZGF0YWJhc2U=')]);
            Artisan::call('migrate:fresh');

        } catch (Exception $e) {

            throw $e;
        }
    }

    public function sqliSetup($database)
    {
        new mysqli($database[dbString('REJfSE9TVA==')], $database[dbString('REJfVVNFUk5BTUU=')],
                $database[dbString('REJfUEFTU1dPUkQ=')], $database[dbString('REJfREFUQUJBU0U=')],
                $database[dbString('REJfUE9SVA==')]);
    }

    public function databaseConfiguration($database)
    {
        config([
            dbString('ZGF0YWJhc2UuZGVmYXVsdA==') => dbString('bXlzcWw='),
            dbString('ZGF0YWJhc2UuY29ubmVjdGlvbnMubXlzcWwuaG9zdA==') => $database[dbString('REJfSE9TVA==')],
            dbString('ZGF0YWJhc2UuY29ubmVjdGlvbnMubXlzcWwucG9ydA==') => $database[dbString('REJfUE9SVA==')],
            dbString('ZGF0YWJhc2UuY29ubmVjdGlvbnMubXlzcWwuZGF0YWJhc2U=') => $database[dbString('REJfREFUQUJBU0U=')],
            dbString('ZGF0YWJhc2UuY29ubmVjdGlvbnMubXlzcWwudXNlcm5hbWU=') => $database[dbString('REJfVVNFUk5BTUU=')],
            dbString('ZGF0YWJhc2UuY29ubmVjdGlvbnMubXlzcWwucGFzc3dvcmQ=') => $database[dbString('REJfUEFTU1dPUkQ=')],
        ]);

        DB::purge(dbString('bXlzcWw='));
        Artisan::call(dbString('Y29uZmlnOmNsZWFy'));
    }

    public function adminSetup($a, $database = null)
    {
        $role = Role::where(dbString('bmFtZQ=='), dbString('QWRtaW4='))->first();
        if (!$role) {
            $role = Role::create([dbString('bmFtZQ==') => dbString('QWRtaW4=')]);
            $role->givePermissionTo(Permission::all());
        }

        $user = User::whereHas('roles', function($q) {
            $q->where(dbString('bmFtZQ=='), dbString('QWRtaW4='));
        })?->first();

        if (!$user) {
            $user = User::factory()->create([
                dbString('bmFtZQ==') => $a[dbString('Zmlyc3RfbmFtZQ==')].' '.$a['last_name'],
                dbString('ZW1haWw=') => $a[dbString('ZW1haWw=')],
                dbString('ZW1haWxfdmVyaWZpZWRfYXQ=') => now(),
                dbString('cGFzc3dvcmQ=') => Hash::make($a[dbString('cGFzc3dvcmQ=')]),
                dbString(dbString('c3lzdGVtX3Jlc2VydmU=')) => true,
            ]);
            $user->assignRole($role);
        }
    }

    public function env($database)
    {
        DotenvEditor::setKeys([
            dbString('REJfSE9TVA==') => $database[dbString('REJfSE9TVA==')],
            dbString('REJfUE9SVA==') => $database[dbString('REJfUE9SVA==')],
            dbString('REJfREFUQUJBU0U=') => $database[dbString('REJfREFUQUJBU0U=')],
            dbString('REJfVVNFUk5BTUU=') => $database[dbString('REJfVVNFUk5BTUU=') ],
            dbString('REJfUEFTU1dPUkQ=') => $database[dbString('REJfUEFTU1dPUkQ=')],
        ]);

        DotenvEditor::save();
    }
}
