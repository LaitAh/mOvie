<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Swapi
{
    /** @var string URL de base pour utiliser l'API Star Wars. */
    protected string $url = 'https://swapi.dev/api/';

    protected array $queryString = [];

    /**
     * Permet de gérer les appels de méthodes qui permettent de construire l'URL.
     *
     * @param string $name Nom de la méthode appelée
     * @param array $arguments Arguments passés à la méthode
     * @return self
     */
    public function __call(string $name, array $arguments): self
    {
        $id = $arguments[0] ?? null;
        $this->url .= $name.'/'.$id;
        return $this; // Method chaining / Chaînage de méthodes
    }

    /**
     * Permet de rechercher une valeur dans toutes les entrées.
     *
     * @param string $search Valeur à rechercher (insensible à la casse).
     * @return self
     */
    public function search(string $search): self
    {
        $this->queryString['search'] = $search;
        return $this;
    }

    /**
     * Permet d'indiquer la page pour laquelle on souhaite récupérer les résultats.
     *
     * @param integer $page Numéro de la page
     * @return self
     */
    public function page(int $page): self
    {
        $this->queryString['page'] = $page;
        return $this;
    }

    /**
     * Permet d'encoder la réponse dans sa traduction Wookiee.
     *
     * @return self
     */
    public function wookiee(): self
    {
        $this->queryString['format'] = 'wookiee';
        return $this;
    }

    /**
     * Permet d'exécuter la requête.
     *
     * @return mixed Réponse JSON convertie en PHP (tableau ...)
     */
    public function get(): mixed
    {
        $response = Http::get($this->url . '?' . http_build_query($this->queryString));
        return $response->json();
    }
}
