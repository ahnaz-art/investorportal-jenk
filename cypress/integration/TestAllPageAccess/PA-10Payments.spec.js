describe('Payments', () => {    
    beforeEach(() => { 
    cy.viewport(2000, 1700)
    cy.login({ email:'1email.33433@iocod.com'})
    cy.visit('/admin/dashboard')
    cy.get('[data-cy="Payments"]').contains('Payments').should('be.visible').click()

    })
    it('Generate Payment For Lenders', ()=>{
        cy.get('[data-cy="Generate_Payment_For_Lenders"]').contains('Generate Payment For Lenders').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/payment/lender_payment_generation')
        cy.get('#lenders').should('be.visible')
        cy.get('#datepicker11').should('be.visible')
        cy.get('#company').should('be.visible')
        cy.get('[value="View"]').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/payment/lender_payment_generation')
    })
    it('Pending Transactions', ()=>{
        cy.get('[data-cy="Pending_Transactions"]').contains('Pending Transactions').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/payment/PendingTransactions')
        cy.get('#from_date1').should('be.visible')
        cy.get('#to_date1').should('be.visible')
        cy.get('#merchant_id').should('be.visible')
        cy.get('#investor_id').should('be.visible')
        cy.get('#getButton').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/payment/PendingTransactions')
    })
    it('Send Merchant ACH', ()=>{
        cy.get('[data-cy="Send_Merchant_ACH"]').contains('Send Merchant ACH').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/payment/ach-payment')
        cy.get('#date1').should('be.visible')
        cy.get('[type="search"]').should('be.visible')
        cy.get('[value="Apply Filter"]').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/payment/ach-payment')
    })
    it('Merchant ACH Status Check', ()=>{
        cy.get('[data-cy="Merchant_ACH_Status_Check"]').contains('Merchant ACH Status Check').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/payment/ach-requests')
        cy.get('#from_date1').should('be.visible', {force:true})
        cy.get('#to_date1').should('be.visible', {force:true})
        cy.get('#merchants_id').should('be.visible', {force:true})
        cy.get('#ach_status').should('be.visible', {force:true})
        cy.get('[type="checkbox"]').click( {force:true})
        cy.get('[value="Download"]').should('be.visible', {force:true})
        cy.get('#checkAllButton').contains('Check Status of All Processing ACH').should('be.visible').click({force:true})
        cy.on('window:confirm', () => false)
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/payment/ach-requests')
    })
    it('Merchant ACH Fees', ()=>{
        cy.get('[data-cy="Merchant_ACH_Fees"]').contains('Merchant ACH Fees').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/payment/ach-fees')
        cy.get('#from_date1').should('be.visible')
        cy.get('#to_date1').should('be.visible')
        cy.get('#merchants_id').should('be.visible')
        cy.get('#status').should('be.visible')
        cy.get('#type').should('be.visible')
        cy.get('[value="Download"]').should('be.visible')
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/payment/ach-fees')
    })
  
})