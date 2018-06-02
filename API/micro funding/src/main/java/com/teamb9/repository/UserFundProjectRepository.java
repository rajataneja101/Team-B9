package com.teamb9.repository;

import javax.persistence.ColumnResult;
import javax.persistence.NamedNativeQueries;
import javax.persistence.NamedNativeQuery;
import javax.persistence.SqlResultSetMapping;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;
import org.springframework.transaction.annotation.Transactional;

import com.teamb9.dto.ProjectDTO;
import com.teamb9.dto.UserFundProjectDTO;

public interface UserFundProjectRepository extends JpaRepository<UserFundProjectDTO, Long>  {
	@Modifying(clearAutomatically = true)
	@Transactional
	@Query(value="UPDATE project_details SET funding_done = (Select SUM(funds) from user_fund_project where project_id = :projectId) "
			+ "WHERE project_id = :projectId",
	nativeQuery= true)
	void updateProjectFunds(@Param("projectId")String projectId);
	
	@Modifying(clearAutomatically = true)
	@Transactional
	@Query(value="UPDATE users_details SET funding_done = (Select SUM(funds) from user_fund_project where user_id = :userId) "
			+ "WHERE email = :userId",
	nativeQuery= true)
	void updateUserFunds(@Param("userId")String userId);
}
