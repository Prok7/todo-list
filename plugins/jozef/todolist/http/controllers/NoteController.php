<?php 
    namespace Jozef\TodoList\Http\Controllers;
    use Jozef\TodoList\Models\Note;

    class NoteController {
        function create() {
            $note = new Note;
            $note->user_id = post("user_id");
            $note->text = post("text");
            $note->save();

            return $note;
        }
    }