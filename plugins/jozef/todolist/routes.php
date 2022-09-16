<?php
    use Jozef\TodoList\Http\Controllers\NoteController;

    Route::group(["prefix" => "api"], function() {
        Route::post("note/create", [NoteController::class, "create"]);
    });