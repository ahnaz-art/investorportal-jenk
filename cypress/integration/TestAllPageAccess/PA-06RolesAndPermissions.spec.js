describe('Roles and Permissions Test', () => {
    beforeEach(() => {
        cy.log_in()
        cy.visit('/admin/dashboard')
        cy.get('[data-cy="Roles_and_Permissions"]').contains('Roles and Permissions').should('be.visible').click()

    })

    it('Checking Users and Roles page is visible', () => {
        cy.get('[data-cy="users_roles"]').contains('Users and Roles').should('be.visible').click({force:true})
        cy.url().should('include', '/admin/role/show-user-role') 
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/role/show-user-role')
        cy.get('#roles').should('be.visible').select('investor',{force:true})
        cy.get('#date_filter').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/role/show-user-role')
        //edit button
        cy.get('[class="btn btn-xs btn-primary"]').contains('Edit').should('be.visible').first().click({force:true})
        cy.url().should('include', Cypress.config().baseUrl + '/admin/role/user-role/edit/')
        cy.contains('View Users').should('be.visible')
        cy.contains('View Merchants').should('be.visible')
        cy.get('[value="Update"]').contains('Update').should('be.visible')
        cy.url().should('include', Cypress.config().baseUrl + '/admin/role/user-role/edit/')
        //permissions button
        cy.visit('/admin/role/show-user-role')
        cy.get('#editor > tbody > tr:nth-child(1) > td:nth-child(6) > a:nth-child(2)').contains('Permissions').should('be.visible').first().click()
        cy.url().should('include', Cypress.config().baseUrl + '/admin/role/user-user-permissions/edit/')
        cy.get('[value="Update"]').contains('Update')
        cy.get('[value="Update"]').should('be.visible').click()
        cy.url().should('include', Cypress.config().baseUrl + '/admin/role/user-user-permissions/edit/')
        cy.get('[class="btn btn-success"]').contains('View Roles').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/role')
        cy.get('[class="btn btn-primary admin-btn"]').contains('Create Role').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/role/create-role')
        cy.get('[value="Create"]').contains('Create')
        cy.get('[value="Create"]').should('be.visible').click()
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/role/create-role')
        cy.get('[class="btn btn-success"]').contains('View Roles').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/role')
        cy.get('[class="btn btn-xs btn-primary"]').contains('Permissions').should('be.visible').first().click({force:true})
        cy.url().should('include', Cypress.config().baseUrl + '/admin/role/edit/')
        cy.get('[value="Update"]').contains('Update')
        cy.get('[value="Update"]').should('be.visible').click()
        cy.url().should('include', Cypress.config().baseUrl + '/admin/role/edit/')
        cy.get('[class="btn btn-success"]').contains('View Roles').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/role')
        cy.visit('/admin/role/show-user-role')
        //Add IP button
        cy.get('[class="btn btn-xs btn-primary"]').contains('Add IP').should('be.visible').first().click({force:true})
        cy.url().should('include', Cypress.config().baseUrl + '/admin/firewall/')
        cy.get('[value="Add IP"]').contains('Add IP')
        cy.get('[value="Add IP"]').should('be.visible').click()
        cy.url().should('include', Cypress.config().baseUrl + '/admin/firewall/')
        cy.visit('/admin/role/show-user-role')
            //create user button
            cy.get('[class="btn btn-primary admin-btn"]').contains('Create User').should('be.visible').click({force:true})
            cy.url().should('eq', Cypress.config().baseUrl + '/admin/role/create-user')
            cy.get('[value="Create"]').contains('Create')
            cy.get('[value="Create"]').should('be.visible').click()
            cy.url().should('include', Cypress.config().baseUrl + '/admin/role/create-user')
            cy.get('[class="btn btn-success"]').contains('View Users').should('be.visible').click()
            cy.url().should('include', Cypress.config().baseUrl + '/admin/role/show-user-role')
            cy.visit('/admin/role/create-user')
            cy.get('[class="btn btn-success"]').contains('View Merchants').should('be.visible').click()
            cy.url().should('eq', Cypress.config().baseUrl + '/admin/merchants')        
    })
    it('Checking Roles and Permissions page is visible', () => {
        cy.get('[data-cy="roles_and_permissions"]').contains('Roles and Permissions').should('be.visible').click({force:true})
        cy.url().should('include', '/admin/role') 
        cy.get('[class="btn btn-primary admin-btn"]').contains('Create Role').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/role/create-role')
        cy.get('[value="Create"]').contains('Create')
        cy.get('[value="Create"]').should('be.visible').click()
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/role/create-role')
        cy.get('[class="btn btn-success"]').contains('View Roles').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/role')
        cy.get('[class="btn btn-xs btn-primary"]').contains('Permissions').should('be.visible')      
    })
    it('Checking Modules page is visible', () => {
        cy.get('[data-cy="cy_modules"]').contains('Modules').should('be.visible').click({force:true})
        cy.url().should('include', '/admin/role/show-modules') 
        cy.get('[class="btn btn-primary admin-btn"]').contains('Create Module').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/role/create-module')
        cy.get('[value="Create"]').contains('Create')
        cy.get('[value="Create"]').should('be.visible').click()
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/role/create-module')
        cy.get('[class="btn btn-success"]').contains('View Modules').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/role/show-modules')
        cy.get('[class="btn btn-xs btn-primary"]').contains('Edit').should('be.visible').first().click({force:true}) 
        cy.url().should('include', Cypress.config().baseUrl + '/admin/role/edit-module')
        cy.get('[value="Update"]').contains('Update')
        cy.get('[value="Update"]').should('be.visible').click()
        cy.url().should('include', Cypress.config().baseUrl + '/admin/role/show-modules')
        cy.get('[class="btn btn-xs btn-primary"]').contains('Edit').should('be.visible').first().click({force:true}) 
        cy.get('[class="btn btn-success"]').contains('View Modules').should('be.visible').click({force:true})
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/role/show-modules')
        cy.get('[value="Delete"]').contains('Delete')
        cy.get('[value="Delete"]').should('be.visible').first().click({force:true})
        cy.on('window:confirm', () => false)
        cy.url().should('eq', Cypress.config().baseUrl + '/admin/role/show-modules')
    })
    it('Checking User Firewall page is visible', () => {
        cy.get('[data-cy="user_firewall"]').contains('User Firewall').should('be.visible').click({force:true})
        cy.url().should('include', '/admin/firewall') 
        cy.get('#user_roles').should('be.visible').select('Roles',{force:true})
        cy.get('[class="btn btn-xs btn-primary"]').contains('Edit').first().click({force:true})
        cy.url().should('include', '/admin/firewall/') 
        cy.get('[value="Add IP"]').contains('Add IP')
        cy.get('[value="Add IP"]').should('be.visible').click()
        cy.url().should('include', Cypress.config().baseUrl + '/admin/firewall/')
    })
})
