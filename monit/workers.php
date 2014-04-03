<?php
    $workers = array(
            'user.user_registration'    =>
                '\Core\Worker\User\UserRegistrationWorker',
            'user.user_invitation'      =>
                '\Core\Worker\User\UserInvitationWorker',
            'user.user_patient_invitation'      =>
                '\Core\Worker\User\UserPatientInvitationWorker',
            'user.user_forgot_password' =>
                '\Core\Worker\User\UserForgotPasswordWorker',
            'library.library_document_share'        =>
                '\Core\Worker\Library\LibraryDocumentShareWorker',
            'appointment.appointment'  =>
                '\Core\Worker\Appointment\AppointmentNotificationWorker',
            'appointment.appointment_reminder'      =>
                '\Core\Worker\Appointment\AppointmentReminderWorker',
            'appointment.appointment_sms_reminder'  =>
                '\Core\Worker\Appointment\AppointmentSmsReminderWorker',
            'appointment.appointment_status_change' =>
                '\Core\Worker\Appointment\AppointmentStatusChangeWorker',
            'appointment.appointment_visit_reminder'=>
                '\Core\Worker\Appointment\AppointmentVisitReminderWorker',
            'survey.survey_practice_reminder'   =>
                '\Core\Worker\Survey\SurveyPracticeReminderWorker',
            'survey.survey_derivation_reminder'   =>
                '\Core\Worker\Survey\SurveyDerivationReminderWorker',
            'patient.patient_visit_next_visit_reminder'   =>
                '\Core\Worker\Patient\PatientVisitNextVisitReminderWorker',
            'patient.patient_visit_next_visit_sms_reminder'   =>
                '\Core\Worker\Patient\PatientVisitNextVisitSmsReminderWorker',
            'ehr.ehr_info'   =>
                '\Core\Worker\Ehr\EhrInfoWorker',
            'ehr.ehr_document'   =>
                '\Core\Worker\Ehr\EhrDocumentNotificationWorker',
            'patient.patient_visit_medicament_made'   =>
                '\Core\Worker\Patient\PatientVisitMedicamentMadeWorker',
            'user.user_reminder'   =>
                '\Core\Worker\User\UserReminderWorker',
            'user.user_appointment_request' =>
                '\Core\Worker\User\UserAppointmentRequest',
            );
        
foreach($workers as $name => $worker) {
    echo $name. ' ' ;
}
