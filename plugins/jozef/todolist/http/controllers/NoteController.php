<?php 
    namespace Jozef\TodoList\Http\Controllers;
    use Jozef\TodoList\Models\Note;
    use Jozef\TodoList\Models\User;
    use Jozef\TodoList\Http\Resources\NoteResource;

    class NoteController {
        // create todo note
        function create() {
            $note = new Note;
            $note->user_id = post("user_id");
            $note->text = post("text");
            $note->save();

            return new NoteResource($note);
        }

        // set note as done/undone
        function update($note_id) {
            $note = Note::findOrFail($note_id);
            $note->fill(post());
            $note->save();

            return $note;
        }

        // show all notes from user
        function show($user_id) {
            $user = User::findOrFail($user_id);
            $done = get("done");
            $notes = $user->notes()
                    ->when($done, function($query, $done) {
                        $query->where("done", $done);
                    }, function($query) {
                        $query;
                    })
                    ->get();
                    
            return NoteResource::collection($notes);
        }
    }