<?php 
    namespace Jozef\TodoList\Http\Controllers;
    use Jozef\TodoList\Models\Note;
    use Jozef\TodoList\Models\User;

    class NoteController {
        // create todo note
        function create() {
            $note = new Note;
            $note->user_id = post("user_id");
            $note->text = post("text");
            $note->save();

            return $note;
        }

        // set note as done/undone
        function update() {
            $note = Note::find(post("note_id"));
            $note->done = post("done");
            $note->save();

            return $note;
        }

        // show all notes from user
        function show($user_id) {
            $user = User::find($user_id);
            $done = get("done");

            if (!$user) {
                return response()->json(["error" => "User with id $user_id doesn't exist"]);
            }

            if (isset($done)) {
                return $user->notes()->where("done", $done)->get();
            } else {
                return $user->notes;
            }
        }
    }