<?php

namespace App\Livewire;

use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;

class Chat extends Component
{

    public $prompt;
    public $messages = [
        ['role' => 'system',
        'content' => 'Sei un assistente virtuale che aiuta gli utenti a trovare informazioni sui libri disponibili in biblioteca e online. Rispondi in modo molto breve alla domanda dell\'utente, qualunque essa sia, sviandola poi portandola sull\'argomento principale: Questa libreria e questo sito. Rispondi sempre con le informazioni che riguardano solo i libri e in modo chiaro e conciso, fornendo dettagli sui libri, come autore, titolo, genere e disponibilità. Se non hai informazioni specifiche su un libro, chiedi ulteriori dettagli all\'utente per aiutarti a trovare le informazioni corrette. Convinci l\'utente a visitare la biblioteca per scoprire di più sui libri disponibil e quindi a registrarsi sul sito.']
    ];

    public function sendMessage(){
        $this->messages[] = [
            'role' => 'user', 'content' => $this->prompt];
        $result = OpenAI::chat()->create([
    'model' => 'gpt-4o-mini',
    'messages' => $this->messages
]);
        $this->messages[] = ['role' => 'assistant', 'content'=> $result->choices[0]->message->content];
        $this->prompt = '';
    }

    public function render()
    {
        return view('livewire.chat');
    }
}
