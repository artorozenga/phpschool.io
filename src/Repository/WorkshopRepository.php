<?php

namespace PhpSchool\Website\Repository;

use PhpSchool\Website\Entity\Workshop;
use RuntimeException;


/**
 * @author Aydin Hassan <aydin@hotmail.co.uk>
 */
interface WorkshopRepository
{
    /**
     * @return Workshop[]
     */
    public function findAllPendingApproval() : array;

    /**
     * @return Workshop[]
     */
    public function findAll() : array;

    /**
     * @param string $id
     * @return Workshop
     * @throws RuntimeException
     */
    public function findById(string $id) : Workshop;

    /**
     * @param string $displayName
     * @return Workshop
     * @throws RuntimeException
     */
    public function findByDisplayName(string $displayName) : Workshop;

    /**
     * @param Workshop $workshopSubmission
     */
    public function save(Workshop $workshopSubmission);
}