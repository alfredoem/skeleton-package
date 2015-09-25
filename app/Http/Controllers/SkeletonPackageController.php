<?php namespace Alfredoem\SkeletonPackage\Http\Controllers;

use App\Http\Controllers\Controller;
use Alfredoem\Skeletonpk\SkeletonPackage;

class SkeletonpkController extends Controller
{
    public function getIndex()
    {
        $structure = SkeletonPackage::structure();
        return view('SkeletonPackage::structure', compact('structure'));
    }
}