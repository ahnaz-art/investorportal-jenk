describe('Reports', () => {    
    beforeEach(() => { 
        cy.login({ email:'1email.33433@iocod.com'})
        cy.visit('/admin/dashboard')
        cy.get('#cy_reports').contains('Reports').should('be.visible').click({force:true})
    })
    it('Default Rate', ()=>{
        cy.get('[data-cy="Default_Rate"]').contains('Default Rate').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/defaultRateReport')
        cy.get('#merchants').should('be.visible',{force:true})
        cy.get('#sub_status').should('be.visible',{force:true})
        cy.get('#velocity').should('be.visible',{force:true})
        cy.get('#lenders').should('be.visible',{force:true})
        cy.get('#investor_type').should('be.visible',{force:true})
        cy.get('#investors').should('be.visible',{force:true})
        cy.get('#merchants').should('be.visible',{force:true})
        cy.get('#from_date1').should('be.visible', {force:true})
        cy.get('#to_date1').should('be.visible', {force:true})
        cy.get('#funded_date').check({force:true})
        cy.get('#label_all').should('be.visible', {force:true})
        cy.get('#label_enable').should('be.visible', {force:true})
        cy.get('#label_disable').should('be.visible', {force:true})
        cy.get('#overpayment').should('be.visible', {force:true})
        cy.get('#days').should('be.visible', {force:true})
        cy.get('[value="Apply Filter"]').should('be.visible', {force:true}).click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/defaultRateReport')
        cy.get('[value="download"]').should('be.visible', {force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/defaultRateReport')
    })
    it('Default Rate (Merchants)', ()=>{
        cy.get('[data-cy="Default_Rate_Merchants"]').contains('Default Rate (Merchants)').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/defaultRateMerchantReport')
        cy.get('#investor_type').should('be.visible',{force:true})    
        cy.get('#investors').should('be.visible',{force:true})
        cy.get('#company').should('be.visible',{force:true})
        cy.get('#funded_date').check({force:true})
        cy.get('#sub_status').should('be.visible', {force:true})
        cy.get('#date_start_def1').should('be.visible', {force:true})
        cy.get('#date_end_def1').should('be.visible', {force:true})
        cy.get('#funded_date').check({force:true})
        cy.get('#days').should('be.visible', {force:true})
        cy.get('[value="Apply Filter"]').should('be.visible', {force:true}).click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/defaultRateMerchantReport')
        cy.get('[value="download"]').should('be.visible', {force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/defaultRateMerchantReport')
    })
    it('Profitability(65/20/15)', ()=>{
        cy.get('[data-cy="Profitability65/20/15"]').contains('Profitability(65/20/15)').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/profitability2')
        cy.get('#funded_date').check({force:true})
        cy.get('#from_date1').should('be.visible', {force:true})
        cy.get('#to_date1').should('be.visible', {force:true})
        cy.get('[value="Apply Filter"]').should('be.visible', {force:true}).click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/profitability2')
        cy.get('[value="Download"]').should('be.visible', {force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/profitability2')
    })
    it('Profitability(50/30/20)', ()=>{
        cy.get('[data-cy="Profitability50/30/20"]').contains('Profitability(50/30/20)').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/profitability3')
        cy.get('#funded_date').check({force:true})
        cy.get('#from_date1').should('be.visible', {force:true})
        cy.get('#to_date1').should('be.visible', {force:true})
        cy.get('[value="Apply Filter"]').should('be.visible', {force:true}).click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/profitability3')
        cy.get('[value="Download"]').should('be.visible', {force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/profitability3')
    })
    it('Profitability(50/30/20) - 2021+', ()=>{
        cy.get('[data-cy="Profitability50/30/20-2021+"]').contains('Profitability(50/30/20) - 2021+').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/profitability21')
        cy.get('#funded_date').check({force:true})
        cy.get('#from_date1').should('be.visible', {force:true})
        cy.get('#to_date1').should('be.visible', {force:true})
        cy.get('[value="Apply Filter"]').should('be.visible', {force:true}).click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/profitability21')
        cy.get('[value="Download"]').should('be.visible', {force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/profitability21')
    })
    it('Profitability(50/50)', ()=>{
        cy.get('[data-cy="cy_Profitability50/50"]').contains('Profitability(50/50)').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/profitability4')
        cy.get('#funded_date').check({force:true})
        cy.get('#from_date1').should('be.visible', {force:true})
        cy.get('#to_date1').should('be.visible', {force:true})
        cy.get('[value="Apply Filter"]').should('be.visible', {force:true}).click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/profitability4')
        cy.get('[value="Download"]').should('be.visible', {force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/profitability4')
    })
    it('Investment', ()=>{
        cy.get('[data-cy="cy_Investment"]').contains('Investment').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/investor')
        cy.get('#date_type').check({force:true})
        cy.get('#date_start1').click( {force:true})
        cy.get('#date_end1').click( {force:true})
        cy.get('#merchants').should('be.visible', {force:true})
        cy.get('#investors').should('be.visible', {force:true})
        cy.get('#lenders').should('be.visible', {force:true})
        cy.get('#industries').should('be.visible', {force:true})
        cy.get('#statuses').should('be.visible', {force:true})
        cy.get('#advance_type').should('be.visible', {force:true})
        cy.get('#export_checkbox').check({force:true})
        cy.get('#owner').should('be.visible', {force:true})
        cy.get('#investor_type').should('be.visible', {force:true})
        cy.get('#sub_status_flag').should('be.visible', {force:true})
        cy.get('#label').should('be.visible', {force:true})
        cy.get('#investor_label').should('be.visible', {force:true})
        cy.get('#label_all').should('be.visible', {force:true})
        cy.get('#label_enable').should('be.visible', {force:true})
        cy.get('#label_disable').should('be.visible', {force:true})
        cy.get('[value="syndicate-report-download"]').should('be.visible', {force:true})
        cy.get('[value="Download report"]').should('be.visible', {force:true})
        cy.get('[value="Apply Filter"]').should('be.visible', {force:true}).click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/investor')
    })
    it('Upsell Commission', ()=>{
        cy.get('[data-cy="Upsell_Commission"]').contains('Upsell Commission').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/upsell-commission')
        cy.get('#date_type').check({force:true})
        cy.get('#date_start1').click({force:true})
        cy.get('#date_end1').click( {force:true})
        cy.get('#merchants').should('be.visible', {force:true})
        cy.get('#investors').should('be.visible', {force:true})
        cy.get('#export_checkbox').check({force:true})
        cy.get('#owner').should('be.visible', {force:true})
        cy.get('[value="Apply Filter"]').should('be.visible', {force:true}).click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/upsell-commission')
        cy.get('[value="Download report"]').should('be.visible', {force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/upsell-commission')
    })
    it('Investor Assignment ', ()=>{
        cy.get('[data-cy="Investor_Assignment"]').contains('Investor Assignment ').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/investorAssignment')
        cy.get('#date_start1').should('be.visible', {force:true})
        cy.get('#date_end1').should('be.visible', {force:true})
        cy.get('#merchants').should('be.visible', {force:true})
        cy.get('#investors').should('be.visible', {force:true})
        cy.get('[value="Apply Filter"]').should('be.visible', {force:true}).click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/investorAssignment')
        cy.get('[value="Download report"]').should('be.visible', {force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/investorAssignment')
    })
    it('Investor Reassignment', ()=>{
        cy.get('[data-cy="Investor_Reassignment"]').contains('Investor Reassignment').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/reassignReport')
        cy.get('#date_start1').should('be.visible', {force:true})
        cy.get('#date_end1').should('be.visible', {force:true})
        cy.get('#merchants').should('be.visible', {force:true})
        cy.get('#investors').should('be.visible', {force:true})
        cy.get('[value="Apply Filter"]').should('be.visible', {force:true}).click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/reassignReport')
    })
    it('Liquidity', ()=>{
        cy.get('[data-cy="cy_Liquidity"]').contains('Liquidity').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/liquidityReport')
        cy.get('#date_start1').should('be.visible', {force:true})
        cy.get('#date_end1').should('be.visible', {force:true})
        cy.get('#company').should('be.visible', {force:true})
        cy.get('#all').should('be.visible', {force:true})
        cy.get('#enable').should('be.visible', {force:true})
        cy.get('#disable').should('be.visible', {force:true})
        cy.get('[value="Apply Filter"]').should('be.visible', {force:true}).click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/liquidityReport')
    })
    it('Payments', ()=>{
        cy.get('[data-cy="cy_Payments"]').contains('Payments').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/payments')  
        cy.get('#date_type').check({force:true})
        cy.get('#date_start1').click( {force:true})
        cy.get('#date_end1').click( {force:true})
        cy.get('#merchant_id').should('be.visible', {force:true})
        cy.get('#lenders').should('be.visible', {force:true})
        cy.get('#investors').should('be.visible', {force:true})
        cy.get('#payment_type').should('be.visible', {force:true})
        cy.get('#payout_frequency').should('be.visible', {force:true})
        cy.get('#statuses').should('be.visible', {force:true})
        cy.get('#advance_type').should('be.visible', {force:true})
        cy.get('#owner').should('be.visible', {force:true})
        cy.get('#export_checkbox').check({force:true})
        cy.get('#investor_type').should('be.visible', {force:true})
        cy.get('#label').should('be.visible', {force:true})
        cy.get('#investor_label').should('be.visible', {force:true})
        cy.get('#overpayment').check({force:true})
        cy.get('#report_totals').check({force:true}) 
        cy.get('#payment-method').should('be.visible', {force:true})
        cy.get('#transaction_id').should('be.visible', {force:true})
        cy.get('#rcode').should('be.visible', {force:true})
        cy.get('#label_all').should('be.visible', {force:true})
        cy.get('#label_enable').should('be.visible', {force:true})
        cy.get('#label_disable').should('be.visible', {force:true})
        cy.get('#export_individual_checkbox').check({force:true})
        cy.get('[value="download-syndicate"]').should('be.visible', {force:true})
        cy.get('[value="download"]').should('be.visible', {force:true})
        cy.get('[value="Apply Filter"]').should('be.visible', {force:true}).click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/payments')
    })
    it('Equity Investor', ()=>{
        cy.get('[data-cy="Equity_Investor"]').contains('Equity Investor').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/equityInvestorReport')
        cy.get('#investors').should('be.visible', {force:true})
        cy.get('[value="Apply Filter"]').should('be.visible', {force:true}).click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/equityInvestorReport')
    })
    it('Total Portfolio Earnings', ()=>{
        cy.get('[data-cy="Total_Portfolio_Earnings"]').contains('Total Portfolio Earnings').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/totalPortfolioEarnings')
    })
    it('OverPayment Report', ()=>{
        cy.get('[data-cy="OverPayment_Report"]').contains('OverPayment Report').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/overpayment-report')  
        cy.get('#date_start1').should('be.visible', {force:true})
        cy.get('#date_end1').should('be.visible', {force:true})
        cy.get('#merchants').should('be.visible', {force:true})
        cy.get('#investors').should('be.visible', {force:true})
        cy.get('#company').should('be.visible', {force:true})
        cy.get('#lenders').should('be.visible', {force:true})
        cy.get('#sub_statuses').should('be.visible', {force:true})
        cy.get('[value="Apply Filter"]').should('be.visible', {force:true}).click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/overpayment-report')
    })
    it('Velocity Profitability', ()=>{
        cy.get('[data-cy="Velocity_Profitability"]').contains('Velocity Profitability').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/velocity-profitability')  
        cy.get('#date_start1').should('be.visible', {force:true})
        cy.get('#date_end1').should('be.visible', {force:true})
        cy.get('#company').should('be.visible', {force:true})
        cy.get('#investors').should('be.visible', {force:true})
        cy.get('#label').should('be.visible', {force:true})
        cy.get('[value="Download"]').should('be.visible', {force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/velocity-profitability')
        cy.get('[value="Apply Filter"]').should('be.visible', {force:true}).click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/velocity-profitability')
    })
    it('Agent Fee Report', ()=>{
        cy.get('[data-cy="Agent_Fee_Report"]').contains('Agent Fee Report').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/agent-fee-report')  
        cy.get('#from_date1').should('be.visible', {force:true})
        cy.get('#to_date1').should('be.visible', {force:true})
        cy.get('#merchant_id').should('be.visible', {force:true})
        cy.get('[value="Apply Filter"]').should('be.visible', {force:true}).click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/reports/agent-fee-report')
    })
  
})