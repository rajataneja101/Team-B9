package com.teamb9.repository;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Repository;

import com.teamb9.dto.ProjectDTO;

@Repository
public interface ProjectRepository extends JpaRepository<ProjectDTO, Long>  {
	
    @Query(value="SELECT * FROM project_details where project = :projectId",nativeQuery=true
    	    )
    public ProjectDTO findByProjectId(@Param("projectId")String projectId);
    
    @Query(value="SELECT * FROM project_details where user = :userId",nativeQuery=true
    	    )
    public List<ProjectDTO> findByUserId(@Param("userId")String userId);
}