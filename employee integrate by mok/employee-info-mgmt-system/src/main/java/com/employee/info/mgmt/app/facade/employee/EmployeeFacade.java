package com.employee.info.mgmt.app.facade.employee;

import com.employee.info.mgmt.app.model.Employee;

import java.util.List;

public interface EmployeeFacade {
    List<Employee> getAllEmployees();

    Employee getEmployeeById(String id);

    boolean addEmployee(Employee employee);

    boolean updateEmployee(Employee employee);
}