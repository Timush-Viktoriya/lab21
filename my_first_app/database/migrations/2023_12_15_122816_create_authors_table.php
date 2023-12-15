<?php

// в файлі database/migrations/xxxx_xx_xx_create_authors_table.php

public function up()
{
    Schema::create('authors', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->timestamps();
    });
}