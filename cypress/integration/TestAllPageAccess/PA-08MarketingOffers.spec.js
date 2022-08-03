describe('Marketing offers', () => {    
    beforeEach(() => { 
    cy.viewport(2000, 1700)
    cy.login({ email:'1email.33433@iocod.com'})
    cy.visit('/admin/dashboard')
    cy.get('[data-cy="marketing_offers"]').contains('Marketing Offers').should('be.visible').click()
    })
    it('Create Merchant Offers', ()=>{
        cy.get('[data-cy="create_mer_offers"]').contains('Create Merchant Offers').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/addEditMerchantsOffers')
        cy.get('[value="Create"]').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/addEditMerchantsOffers')
        cy.contains('View Offers').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/merchantMarketOfferList')
    })
    it(' Merchant Offers list', ()=>{
        cy.get('[data-cy="mer_offfer_list"]').contains('Merchant Offers List').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/merchantMarketOfferList')
        cy.contains('Create Offers').should('be.visible').should('have.attr', 'href', 'https://investorportal.test/admin/addEditMerchantsOffers')
        cy.get('#dataTableBuilder > tbody > tr.odd > td:nth-child(3) > a').should('be.visible').first().click({force:true})
        cy.url().should('include', Cypress.config().baseUrl + '/admin/addEditMerchantsOffers?id=')
        cy.get('[value="Update"]').should('be.visible').click({force:true})
        cy.contains('View Offers').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/merchantMarketOfferList')
        cy.get('[value="Delete"]').should('be.visible').first().click({force:true})
        cy.on('window:confirm', () => true)
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/merchantMarketOfferList')
    })
    it('Create Investor Offers', ()=>{
        cy.get('[data-cy="create_investor_offers"]').contains('Create Investor Offers').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/addEditInvestorsOffers')
        cy.get('[value="Create"]').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/addEditInvestorsOffers')
        cy.contains('View Offers').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/investorMarketOfferList')
    })
    it('Investors Offers List', ()=>{
        cy.get('[data-cy="investor_offers_list"]').contains('Investors Offers List').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/investorMarketOfferList')
        cy.contains('Create Offers').should('be.visible').should('have.attr', 'href', 'https://investorportal.test/admin/addEditInvestorsOffers')
        cy.get('#dataTableBuilder > tbody > tr:nth-child(1) > td:nth-child(3) > a').should('be.visible').first().click({force:true})
        cy.url().should('include', Cypress.config().baseUrl + '/admin/addEditInvestorsOffers?id=')
        cy.get('[value="Update"]').should('be.visible').click({force:true})
        cy.contains('View Offers').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/investorMarketOfferList')
    })
})