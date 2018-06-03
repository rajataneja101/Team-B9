package com.teamb9.repository;

import java.util.List;

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
	@Query(value="UPDATE project_details SET funding_done = (Select SUM(funds) from user_fund_project where project = :projectId) "
			+ "WHERE project = :projectId",
	nativeQuery= true)
	void updateProjectFunds(@Param("projectId")String projectId);
	
	@Modifying(clearAutomatically = true)
	@Transactional
	@Query(value="UPDATE users_details SET funding_done = (Select SUM(funds) from user_fund_project where user = :userId) "
			+ "WHERE email = :userId",
	nativeQuery= true)
	void updateUserFunds(@Param("userId")String userId);
	
	
	@Modifying(clearAutomatically = true)
    @Query(value="SELECT id,project,user,SUM(funds) as funds  FROM user_fund_project where user = :userId GROUP BY project",nativeQuery=true)
    public List<UserFundProjectDTO> findFundedProjects(@Param("userId")String userId);
}
