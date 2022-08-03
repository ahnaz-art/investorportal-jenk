describe('Payments', () => {    
    beforeEach(() => { 
        cy.viewport(2000, 1700)
        cy.login({ email:'1email.33433@iocod.com'})
        cy.visit('/admin/dashboard')
        cy.get('[data-cy="investor_ach"]').contains('Investor ACH').should('be.visible').click({force:true})
    })
    it('Status Check', ()=>{
        cy.get('[data-cy="Status_Check"]').contains('Status Check').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/payment/investor/ach-requests')
        cy.get('#from_date1').should('be.visible', {force:true})
        cy.get('#to_date1').should('be.visible', {force:true})
        cy.get('#investor_id').should('be.visible', {force:true})
        cy.get('#ach_request_status').should('be.visible', {force:true})
        cy.get('#order_id').check({force:true})
        cy.get('#transaction_method').should('be.visible', {force:true})
        cy.get('#ach_status').should('be.visible', {force:true})
        cy.get('[value="Download"]').should('be.visible', {force:true})
        cy.get('#achRequestStatusCheckAllButton').get('[value="Check"]').should('be.visible', {force:true}).click({force:true})
        cy.on('window:confirm', ()=> false)
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/payment/investor/ach-requests')
    })
    it('Syndication Payments', ()=>{
        cy.get('[data-cy="Syndication_Payments"]').contains('Syndication Payments').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/investors/SyndicationPayments')
        cy.get('#investor_id').should('be.visible', {force:true})
        cy.get('#fetchButton').contains('Fetch').should('be.visible', {force:true}).click({force:true})
        cy.get('[value="normal"]').contains('Normal Send All').should('be.visible', {force:true}).click({force:true})
        cy.on('window:confirm', ()=> false)
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/investors/SyndicationPayments')
        cy.get('[value="same_day_"]').contains('Same Day Send All').should('be.visible', {force:true}).click({force:true})
        cy.on('window:confirm', ()=> false)
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/investors/SyndicationPayments')
    })
  
})