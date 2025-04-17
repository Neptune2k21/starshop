<?php
namespace App\Repository;
use App\Model\Starship;
use Psr\Log\LoggerInterface;
use App\Model\StarshipStatusEnum;

class StarshipRepository
{
    public function __construct(private LoggerInterface $logger)
    {
    }
    public function findAll(): array
    {
        $this->logger->info('Collection de vaisseaux spatiaux récupérée.');
        return [
            new Starship(
                1,
                'USS LeafyCruiser (NCC-0001)',
                'Garden',
                'Jean-Luc Pickles',
                StarshipStatusEnum::IN_PROGRESS->value
            ),
            new Starship(
                2,
                'USS Espresso (NCC-1234-C)',
                'Latte',
                'James T.Quick',
                StarshipStatusEnum::COMPLETED->value
            ),
            new Starship(
                3,
                'USS Wanderlust (NCC-2024-C)',
                'Delta Tourist',
                'Kathryn Journeyway',
                StarshipStatusEnum::WAITING->value
            ),
        ];
    }
    public function find(int $id): ?Starship
    {
        foreach ($this->findAll() as $starship) {
            if ($starship->getId() === $id) {
                return $starship;
            }
        }
        return null;
    }

}

