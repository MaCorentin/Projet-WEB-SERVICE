<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <input style="color:#E05252" type="text"  class="form-control" placeholder="Recherche d'un client..." wire:model="searchTerm" />
                <table class="table table-bordered" style="margin: 10px 0 10px 0;">
                    <tr class="hoverRed">
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Rue</th>
                        <th>Ville</th>
                        <th>Code Postal</th>
                    </tr>
                    @foreach($users as $user)
                        <tr class="hoverRed">
                            <td>
                                {{ $user->first }}
                            </td>
                            <td>
                                {{ $user->last }}
                            </td>
                            <td>
                                {{ $user->street }}
                            </td>
                            <td>
                                {{ $user->city }}
                            </td>
                            <td>
                                {{ $user->zip }}
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $users->links('livewire.livewire-pagination') }}
            </div>
        </div>
    </div>
</div>
