<?php
    namespace Jozef\TodoList\Http\Resources;
    use Illuminate\Http\Resources\Json\JsonResource;

    class NoteResource extends JsonResource {

        public function toArray($request) {
            return [
                "id" => $this->id,
                "user_id" => $this->user_id,
                "text" => $this->text,
                "done" => $this->done,
                "created_at" => date($this->created_at),
                "updated_at" => date($this->updated_at)
            ];
        }
        
    }