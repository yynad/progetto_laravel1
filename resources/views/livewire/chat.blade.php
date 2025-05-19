<div>
 <h1 class="text-white">Hai bisogno di aiuto?</h1>
 <form wire:submit="sendMessage">
 <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Scrivi qui il tuo messaggio.." wire:model="prompt">
  <button class="btn btn-custom" type="submit" id="button-addon2">Invia</button>
</div>
</form>
@if(count($messages) > 0 )
<div class="bg-light rounded p-3">
    @foreach($messages as $message)
    @if($message['role'] == 'user')
    <p><strong class="arancio testomodificato">TU:</strong> {{$message['content']}}</p>
    @elseif($message['role'] == 'assistant')
    <p class="text-success"><strong class="arancio testomodificato">RISPOSTA:</strong> {{$message['content']}}</p>
    @endif
    @endforeach
</div>
@endif
</div>
