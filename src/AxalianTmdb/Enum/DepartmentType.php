<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 2-11-13
 * Time: 10:33
 */

namespace AxalianTmdb\Enum;


use SplEnum;

class DepartmentType extends SplEnum
{
    const WRITING = "Writing";
    const DIRECTING = "Directing";
    const ACTORS = "Actors";
    const CAMERA = "Camera";
    const EDITING = "Editing";
    const ART = "Art";
    const COSTUME_AND_MAKEUP = "Costume & Make-Up";
    const PRODUCTION = "Production";
    const SOUND = "Sound";
    const VISUAL_EFFECTS = "Visual Effects";
    const CREW = "Crew";
    const LIGHTNING = "Lightning";
}