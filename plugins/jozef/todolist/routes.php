<?php
    use Jozef\TodoList\Http\Controllers\NoteController;

    Route::group(["prefix" => "api"], function() {
        Route::post("notes", [NoteController::class, "create"]);
        Route::post("notes/{note_id}", [NoteController::class, "update"]);
        Route::get("users/{user_id}/notes", [NoteController::class, "show"]);
    });