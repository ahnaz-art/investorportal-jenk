<?php

namespace App\Console\Commands\SingleUse;

use App\Merchant;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdateCreatorId extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'creator_id:update_merchants';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Creator ID for CRM created merchants';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            $merchant_id = ['8694', '8985', '8688', '8401', '8698', '8723', '8724', '8731', '8744', '8774', '9198', '8812', '8693', '8821', '8840', '8839', '8830', '8833', '8873', '8914', '8944', '8943', '8946', '8967', '8981', '8987', '9001', '9015', '9014', '9016', '9029', '9042', '9046', '9031', '9039', '9033', '9027', '9047', '9048', '9050', '9054', '9053', '9067', '9092', '9069', '9087', '9109', '9105', '9126', '9124', '9141', '9162', '9157', '9191', '9192', '9187', '9184', '9196', '9197', '9590', '9194', '9206', '9205', '9204', '9208', '8682', '9229', '9221', '9245', '9253', '9261', '9341', '9266', '9267', '92273', '8891', '9295', '9296', '9306', '9305', '9384', '9487', '9385', '9390', '9444', '9484', '9522', '9523', '9524', '9528', '9530', '9224', '8954', '9228', '9226', '9545', '9550', '9551', '9552', '9554', '9556', '9570', '9569', '9645', '9513', '9512', '9509', '9508', '9504', '9500', '9571', '9495', '9496', '9498', '9482', '9474', '9479', '9518', '9478', '9467', '9470', '9465', '9460', '9461', '9454', '9450', '9492', '9452', '9491', '9431', '9430', '8805', '9453', '9427', '9429', '9416', '9428', '9417', '9451', '9409', '9410', '9407', '9405', '9414', '9383', '9386', '9374', '9373', '9366', '9365', '9572', '9363', '9381', '9575', '9581', '9358', '9346', '9402', '9349', '9326', '9321', '9588', '9315', '9313', '9302', '9593', '9596', '9323', '9599', '9298', '9600', '9602', '9608', '9612', '9260', '8963', '9239', '9617', '9620', '9631', '9469', '9639', '9646', '9665', '9679', '9691', '9703', '9702', '9719', '9718', '9720', '9721', '9725', '9723', '9726', '9727', '9732', '9733', '9735', '9739', '9746', '9745', '9749', '9750', '9755', '9756', '9763', '9762', '9768', '9769', '9778', '9779', '9785', '9781', '9782', '9789', '9790', '9801', '9800', '9805', '9804', '9809', '9810', '9818', '9819', '8649', '8886', '8806', '8871', '8923', '8949', '8937', '8941', '9246', '8953', '8958', '8973', '9019', '8976', '9018', '9028', '9017', '9101', '9026', '9040', '9041', '9106', '9052', '9049', '9051', '9073', '9070', '9095', '9089', '9084', '9096', '9075', '9142', '9108', '9102', '91079103', '9139', '9122', '9123', '9152', '9138', '8994', '9163', '9173', '9172', '9274', '8878', '9282', '9283', '9294', '9317', '9309', '9301', '9316', '8970', '9324', '8250', '9331', '9333', '9335', '9338', '9397', '9351', '9352', '9355', '9360', '9364', '9395', '9393', '9395', '9462', '9406', '9436', '9418', '9424', '9423', '9503', '9427', '9435', '9438', '9440', '9448', '9457', '9404', '9468', '9464', '9429', '9481', '9475', '9476', '9480', '9511', '9491', '9590', '9566', '9565', '9589', '9500', '9592', '9005', '9626', '9627', '9653', '9664', '9705', '9709', '9730', '9729', '9736', '9737', '9742', '9738', '9740', '9741', '9743', '9751', '9752', '9747', '9757', '9754', '9760', '9753', '9758', '9759', '9761', '9803', '9764', '9765', '9766', '9767', '9770', '9773', '9772', '9771', '9776', '9774', '9775', '9777', '9780', '9786', '9784', '9793', '9787', '9788', '9802', '9799', '9791', '9792', '9794', '9795', '9798', '9796', '9797', '9811', '9807', '9806', '9812', '9808', '9813', '9816', '9814', '9815', '9817', '9820', '9821'];
            $crm_user = DB::table('user_has_roles')->where('role_id', User::CRM_ROLE)->select('model_id')->first();
            $creator_id = ($crm_user) ? $crm_user->model_id : null;
            $update = DB::table('merchants')->whereIn('id', $merchant_id)->update(['creator_id' => $creator_id]);
            $update2 = DB::table('merchants')->where('id', 9701)->update(['creator_id' => 216]);
            echo 'Successfully updated creator id.';
        } catch (\Throwable $th) {
            throw $th;
        }

        return 0;
    }
}
