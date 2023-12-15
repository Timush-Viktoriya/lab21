<?php
// в файлі database/migrations/xxxx_xx_xx_create_books_table.php

public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->unsignedBigInteger('author_id');
        $table->foreign('author_id')->references('id')->on('authors');
        $table->timestamps();
    });
}