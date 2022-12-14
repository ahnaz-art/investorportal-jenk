<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class emptydatabase extends DuskTestCase
{
    /**
     * A Dusk test testReport.
     *
     * @return void
     *
     * @author Priya
     */
    protected $browser;

    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $this->browser = $browser;
            $this->Login();
            $this->emptydatabase();
        });
    }

    public function Login()
    {
        $this->browser->visit('/login')
                    ->type('email', 'admin@investor.portal')
                    ->type('password', 'admin987987')
                    ->press('Login')
                    ->visit('/admin/dashboard')
                    ->assertPathIs('/admin/dashboard');
    }

    public function emptydatabase()
    {
        $this->browser->visit('/admin/dashboard')

           ->visit('/admin/dashboard')
            ->clickLink('Accounts')
            ->clickLink('All Accounts')
            ->visit('/admin/investors')
            ->press('download')
            ->clickLink('Create Account')
            ->visit('/admin/investors/create')
            ->clickLink('Create Account')
            ->visit('/admin/investors/create')
            ->clickLink('View Accounts')
            ->visit('/admin/investors')
            ->clickLink('Generate PDF For Investors')
            ->visit('/admin/pdf_for_investors')
            ->clickLink('Generated PDF/CSV')
            ->visit('/admin/generatedPdfCsv')
            ->clickLink('FAQ')
            ->visit('/admin/investors/faq')
            ->clickLink('Create New')
            ->visit('/admin/investors/faq/create')
            ->clickLink('Cancel')
            ->visit('/admin/investors/faq')
            ->clickLink('Companies')
            ->clickLink('All Companies')
            ->visit('/admin/sub_admins')
            ->clickLink('Create Companies')
            ->visit('/admin/sub_admins/create')
            ->clickLink('View Compaines')
            ->visit('/admin/sub_admins')
            ->clickLink('Create Companies')
            ->visit('/admin/sub_admins/create')
            ->clickLink('Lender')
            ->clickLink('All Lenders')
            ->visit('/admin/lender')
            ->clickLink('Create Lender')
            ->visit('/admin/lender/create')
            ->clickLink('Create Lender')
            ->visit('/admin/lender/create')
            ->clickLink('View Lenders')
            ->visit('/admin/lender')
            ->clickLink('Lender Settings')
            ->visit('/admin/lenderActivation')
            ->clickLink('Roles and Permissions')
            ->visit('admin/role')
            ->clickLink('Users and Roles')
            ->visit('/admin/role/show-user-role')
            ->clickLink('Create User')
            ->visit('/admin/role/create-user')
            ->clickLink('View Users')
            ->visit('/admin/role/show-user-role')
            ->visit('/admin/role/user-role/edit/1')
            ->clickLink('View Users')
            ->visit('/admin/role/show-user-role')
            ->visit('/admin/role/user-role/edit/2')
            ->clickLink('View Users')
            ->visit('/admin/role/show-user-role')
            ->clickLink('Roles and Permissions')
            ->visit('/admin/role')
            ->clickLink('Create Role')
            ->visit('/admin/role/create-role')
            ->clickLink('View Roles')
            ->visit('/admin/role')
            ->clickLink('Permissions')
            ->visit('/admin/role/edit/1')
            ->clickLink('Roles and Permissions')
            ->clickLink('Modules')
            ->visit('/admin/role/show-modules')
            ->clickLink('Create Module')
            ->visit('/admin/role/create-module')
            ->clickLink('View Modules')
            ->visit('/admin/role/show-modules')
            ->clickLink('User Firewall')
            ->visit('/admin/firewall')
            ->visit('/admin/firewall/1')
            ->clickLink('Merchants')
            ->clickLink('All Merchants')
            ->visit('/admin/merchants')
            ->clickLink('Create Merchants')
            ->visit('/admin/merchants/create')
            ->clickLink('Graph')
            ->visit('/admin/percentage_deal')
            ->clickLink('Change to Default')
            ->visit('/admin/change_merchant_status')
            ->clickLink('Change to Advanced Status')
            ->visit('/admin/change_advanced_status')
            ->clickLink('Generate Statement')
            ->visit('/admin/pdf_for_merchants')
            ->clickLink('Generated Statement')
            ->visit('/admin/generated_pdf_merchants')
            ->clickLink('FAQ')
            ->visit('/admin/merchants/faq')
            ->clickLink('Create New')
            ->visit('/admin/merchants/faq/create')
            ->clickLink('Cancel')
            ->visit('/admin/merchants/faq')
            ->clickLink('Marketing Offers')
            ->clickLink('Create Merchant Offers')
            ->visit('/admin/addEditMerchantsOffers')
            ->clickLink('View Offers')
            ->visit('/admin/merchantMarketOfferList')
            ->clickLink('Merchant Offers List')
            ->visit('/admin/merchantMarketOfferList')
            ->clickLink('Create Offers')
            ->visit('/admin/addEditMerchantsOffers')
            ->clickLink('View Offers')
            ->visit('/admin/merchantMarketOfferList')
            ->clickLink('Create Investor Offers')
            ->visit('/admin/addEditInvestorsOffers')
            ->clickLink('View Offers')
            ->visit('/admin/investorMarketOfferList')
            ->clickLink('Investors Offers List')
            ->visit('/admin/investorMarketOfferList')
            ->clickLink('Reconciliation Request')
            ->visit('/admin/merchants/reconcilation-request')
            ->clickLink('Payments')
            ->clickLink('Generate Payment For Lenders')
            ->visit('/admin/payment/lender_payment_generation')
            ->press('View')
            ->press('View')
            ->clickLink('Pending Payment')
            ->visit('/admin/payment/PendingTransactions')
            ->clickLink('Send Merchant ACH')
            ->visit('/admin/payment/ach-payment')
            ->clickLink('Merchant ACH Status Check')
            ->visit('/admin/payment/ach-requests')
            ->clickLink('Merchant ACH Fees')
            ->visit('/admin/payment/ach-fees')
            ->clickLink('Investor ACH')
            ->clickLink('Status Check')
            ->visit('/admin/payment/investor/ach-requests')
            ->clickLink('Syndication Payments')
            ->visit('/admin/investors/SyndicationPayments')
            ->clickLink('Reports')
            ->clickLink('Default Rate')
            ->visit('/admin/reports/defaultRateReport')
            ->visit('/admin/investors/SyndicationPayments')
            ->clickLink('Reports')
            ->clickLink('Default Rate (Merchants)')
            ->visit('/admin/reports/defaultRateMerchantReport')
            ->clickLink('Profitability(65/20/15)')
            ->visit('/admin/reports/profitability2')
            ->clickLink('Profitability(50/30/20)')
            ->visit('/admin/reports/profitability3')
            ->clickLink('Profitability(50/30/20) - 2021')
            ->visit('/admin/reports/profitability21')
            ->clickLink('Profitability(50/50)')
            ->visit('/admin/reports/profitability4')
            ->clickLink('Investment')
            ->visit('/admin/reports/investor')
            ->clickLink('Investor Assignment')
            ->visit('/admin/reports/investorAssignment')
            ->clickLink('Investor Reassignment')
            ->visit('/admin/reports/reassignReport')
            ->clickLink('Liquidity')
            ->visit('/admin/reports/liquidityReport')
            ->clickLink('Payments')
            ->visit('/admin/reports/payments')
            ->clickLink('Transactions')
            ->visit('/admin/investors/transaction-report')
            ->clickLink('Accrued Pre Return')
            ->visit('/admin/reports/investorRoiAccured')
            ->clickLink('Debt Investor')
            ->visit('/admin/reports/investorProfitReport')
            ->clickLink('Equity Investor')
            ->visit('/admin/reports/equityInvestorReport')
            ->clickLink('Total Portfolio Earnings')
            ->visit('/admin/reports/totalPortfolioEarnings')
            ->clickLink('OverPayment Report')
            ->visit('/admin/reports/overpayment-report')
            ->clickLink('Velocity Profitability')
            ->visit('/admin/reports/velocity-profitability')
            ->clickLink('Investor Liquidity Log')
            ->visit('/admin/reports/InvestorLiquidityLog')
            ->clickLink('Investor RTR Balance Log')
            ->visit('/admin/reports/InvestorRTRBalanceLog')
            ->clickLink('Create')
            ->visit('/admin/reports/InvestorRTRBalanceLog')
            ->clickLink('Logs')
            ->clickLink('Liquidity Log')
            ->visit('/admin/reports/liquidityLog')
            ->clickLink('Merchant Liquidity Log')
            ->visit('/admin/reports/MerchantliquidityLog')
            ->clickLink('Merchant Status Log')
            ->visit('/admin/merchant_status_log')
            ->clickLink('User Activity Log')
            ->visit('/admin/activity-log')
            ->clickLink('Investor Transaction Log')
            ->visit('/admin/investor-transaction-log')
            ->clickLink('Messages Log')
            ->visit('/admin/messages')
            ->clickLink('Mail Log')
            ->visit('/admin/merchants/mail-log')
            ->clickLink('Settings')
            ->clickLink('Advance Settings')
            ->visit('/admin/settings')
            ->clickLink('Re-assign')
            ->visit('/admin/re-assign')
            ->clickLink('All sub status')
            ->visit('/admin/sub_status')
            ->clickLink('Label')
            ->visit('/admin/label')
            ->clickLink('Calender for Holidays')
            ->visit('/admin/fullcalender')
            ->clickLink('Liquidity Adjuster')
            ->visit('/admin/admin/liquidity_adjuster')
            ->clickLink('Two Factor Authentication')
            ->visit('/admin/two-factor-authentication')
            ->clickLink('Carry Forwards')
            ->visit('/admin/carryforwards')
            ->clickLink('Penny Adjustment')
            ->clickLink('Liquidity Difference')
            ->visit('/PennyAdjustment/LiquidityDifference')
            ->clickLink('Merchant Value Difference')
            ->visit('/PennyAdjustment/MerchantValueDifference')
            ->clickLink('Company Amount Difference')
            ->visit('/PennyAdjustment/CompanyAmountDifference')
            ->clickLink('Zero Participant Amount')
            ->visit('/PennyAdjustment/ZeroParticipantAmount')
            ->clickLink('Final Participant Share Difference')
            ->visit('/PennyAdjustment/FinalParticipantShare')
            ->clickLink('Merchant Investor Share Difference')
            ->visit('/PennyAdjustment/MerchantInvestorShareDifference')
            ->clickLink('Merchants Fund Amount Check')
            ->visit('/PennyAdjustment/MerchantsFundAmountCheck')
            ->clickLink('Investment Amount Check')
            ->visit('/PennyAdjustment/InvestmentAmountCheck')
            ->clickLink('Penny Investment')
            ->visit('/PennyAdjustment/PennyInvestment')
            ->clickLink('Logout')
            ->visit('/login');
    }
}
