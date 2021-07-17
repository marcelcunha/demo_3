<?php

namespace App\Services;

use Illuminate\Pagination\LengthAwarePaginator;

class PaginatorService
{
    protected int $perPage;
    protected int $total;
    protected ?int $limit;

    /**
     * Construtor da classe
     *
     * @param integer $total Total de itens da coleção
     * @param integer $perPage Quantidade de items por página
     * @param integer|null $limit Limite para o total de items na coleção
     */
    public function __construct(int $total, int $perPage = 10, ?int $limit = null)
    {
        $this->perPage = $perPage;
        $this->limit = $limit;
        $this->total = $this->setTotal($total);
    }

    /**
     * Devolve um objeto de paginação padrão do Laravel
     *
     * @param array $items
     * @return LengthAwarePaginator
     */
    public function paginate(array $items) : LengthAwarePaginator
    {
        return new LengthAwarePaginator($items, $this->total, $this->perPage);
    }

    /**
     * Expecifica o total de items, caso limit esteja setado, limita o total ao valor de limit
     *
     * @param integer $total Total de items
     * @return integer
     */
    public function setTotal(int $total)
    {
        if (isset($this->limit)) {
            return $total > $this->limit ? $this->limit : $total;
        }

        return $total;
    }
}
