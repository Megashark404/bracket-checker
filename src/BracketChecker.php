<?php

namespace Vladimirsannikov\Bracketchecker;

class BracketChecker
{
    /**
     * @throws EmptyBracketSequenceException
     */

    public function check(string $brackets): bool
    {
        if ($brackets == null) {
            throw new EmptyBracketSequenceException();
        }

        $bracketCounter = 0;

        for ($i = 0; $i < strlen($brackets); $i++) {
            if ($brackets[$i] == '(') {
                $bracketCounter++;
            } elseif ($brackets[$i] == ')') {
                $bracketCounter--;
                if ($bracketCounter < 0) {
                    break;
                }
            }
        }

        if ($bracketCounter == 0) {
            return true;
        }
        return false;
    }
}
