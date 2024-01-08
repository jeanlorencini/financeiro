<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('painel_digitals', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('localizacao');
            $table->boolean('disponivel_para_venda')->default(true);
            $table->boolean('disponivel_para_aluguel')->default(true);
            $table->decimal('preco_compra', 8, 2);
            $table->decimal('preco_venda', 8, 2);
            $table->timestamps(); // Cria automaticamente as colunas created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('painel_digitals');
    }
};
