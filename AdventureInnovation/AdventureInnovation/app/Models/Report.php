<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Model class for the Reports.  Sets up the dependency for the user.
 * Class Report
 * @package App\Models
 */
class Report extends Model
{
    protected $fillable = [
        'Type_of_Injury','Other_Injury','Type_of_Illness','Other_Illness','Program_Activity','Other_Activity','Immediate_Cause',
        'Other_Cause','Anatomical_Location','Report_date','Report_time','Temperature','Wind','Precipitation','Visibility','Surface_Condition',
        'Location','Incident','Evacuation_Method','Damage','Lost_Number_Of_Days','Lost_Day','Victim_Left_Field','Victim_Left_Date',
        'Visit_Facility','Left_Date','Return_Field','Return_Date','Re_Curring','Attachment'
    ];

    /**
     * Get the associated user.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function user() {
        return $this->belongsToMany('App\Models\User');
    }
}
