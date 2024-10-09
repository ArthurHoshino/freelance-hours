<?php

namespace App\Livewire\Proposals;

use App\Models\Project;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Create extends Component
{
    public Project $project;
    public bool $modal = false;

    #[Rule(['required', 'email'])]
    public string $email = '';

    #[Rule(['required', 'numeric', 'gt:0'])]
    public int $hours = 0;

    public bool $agree = false;

    public function save() {
        $this->validade();
        if (!$this->agree) {
            $this->addError('agree', 'É necessário concordar com os termos de uso');
            return;
        }

        $this->project->proposals()
            ->updateOrCreate(
                ['email' => $this->email],
                ['hours' => $this->hours]
            );
    }

    public function render()
    {
        return view('livewire.proposals.create');
    }
}
