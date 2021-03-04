import AllCustomers from './components/AllCustomers.vue';
import AddCustomer from './components/AddCustomer.vue';
import EditCustomer from './components/EditCustomer.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllCustomers
    },
    {
        name: 'add',
        path: '/add',
        component: AddCustomer
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditCustomer
    }
];