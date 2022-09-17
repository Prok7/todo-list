<?php
    use Jozef\TodoList\Http\Controllers\NoteController;

    Route::group(["prefix" => "api"], function() {
        Route::post("note/create", [NoteController::class, "create"]);
        Route::post("note/update", [NoteController::class, "update"]);
        Route::get("users/{user_id}/notes", [NoteController::class, "show"]);
    });